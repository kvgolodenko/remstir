<?php

/**
 * Handle file uploads via XMLHttpRequest
 */
class qqUploadedFileXhr {

	private $tmpfile_name;
	private $tmpfile;

    /**
     * Save the file to the specified path
     * @return boolean TRUE on success
     */

	function getTmpFileName()
	{
        if (!$this->tmpfile_name) {
            $this->tmpfile_name = tempnam('/var/www/apollon/data/mod-tmp', 'upload');
            $this-> getTmpFile();
        }
		return $this->tmpfile_name;
	}


	function getTmpFile()
	{
		if ($this->tmpfile) return $this->tmpfile;

		$input = fopen("php://input", "r");
		$this->tmpfile = fopen($this->getTmpFileName(), "w");
		$realSize = stream_copy_to_stream($input, $this->tmpfile);
		fclose($input);
        
		if ($realSize != $this->getSize())
		{
			fclose($this->tmpfile);
			return false;
		}
		fflush($this->tmpfile);
		fseek($this->tmpfile, 0, SEEK_SET);

		return $this->tmpfile;
	}


	function save($path)
	{
        $target = fopen($path, "w");
        fseek($this->getTmpFile(), 0, SEEK_SET);
        stream_copy_to_stream($this->getTmpFile(), $target);
        fclose($target);

        return TRUE;
    }


    function getName()
    {
        return $_GET['qqfile'];
    }


    function getSize()
    {
        if (isset($_SERVER['CONTENT_LENGTH']))
        {
            return (int) $_SERVER['CONTENT_LENGTH'];
        }
        else
        {
            throw new Exception('Getting content length is not supported.');
        }
    }
}


/**
 * Handle file uploads via regular form post (uses the $_FILES array)
 */
class qqUploadedFileForm {

	function getTmpFileName()
	{
		return $_FILES['qqfile']['tmp_name'];
	}


    /**
     * Save the file to the specified path
     * @return boolean TRUE on success
     */
    function save($path)
    {
        return move_uploaded_file($this->getTmpFileName(), $path);
    }


    function getName()
    {
        return $_FILES['qqfile']['name'];
    }


    function getSize()
    {
        return $_FILES['qqfile']['size'];
    }

}

class qqFileUploader {

    private function __construct()
    {
    }

    public static function get()
    {
    	if (isset($_GET['qqfile']))
    	{
    		return new qqUploadedFileXhr();
    	}
    	elseif (isset($_FILES['qqfile']))
    	{
    		return new qqUploadedFileForm();
    	}
    	else
    	{
    		return false;
    	}
    }
}
