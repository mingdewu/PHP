<?php
  abstract class CacheProviderBase 
  {
  	abstract function Add($key, $data); 
    abstract function Delete($key);
    abstract function Get($key);
  }
  class FileCacheProvider  extends  CacheProviderBase 
  {
	  private $_baseDirectory;
	  public function __constructor($baseDirectory)
	  {
		  $baseDirectory = realpath($baseDirectory);
		  if (!is_dir($baseDirectory)) throw new InvalidArgumentException('Ŀ¼������');

		  if ('\\' === DIRECTORY_SEPARATOR)
		  {
			// windows ϵͳ�£�Ҫ��·���еġ�\��תΪ��/�����������Լ��� xUnix ϵͳ
			$baseDirectory = str_replace(array('\\', '//'), '/', $baseDirectory);
		  }
		  $len = strlen($baseDirectory);
		  if ('/' !== $baseDirectory{$len-1})
		  {
			  // $baseDirectory{0} ���ʾ������ $baseDirectory �ĵ�һ���ַ�
			  // $baseDirectory ���һ���ַ����ǡ�/����Ҫ����
			  $baseDirectory .= '/';
		  }
		  $this->_baseDirectory = $baseDirectory;
	  }
  	function Add($key,$data)
  	{
		// Ҫ�� $key �� $data ���м�飬�˴�ʡ��
		// ���黺���ļ�����չ���� .php �����ڻ����ļ��м��� php ���룬��ֹ�����ļ������ػ򱻲鿴
		// ���巽����
		$file_path = $this->_baseDirectory . md5($key) . '.cache.php';
		file_put_contents($file_path, serialize($data));
  	}
  	function Delete($key)
  	{
		// Ҫ�� $key �� $data ���м��
		// ���黺���ļ�����չ���� .php �����ڻ����ļ��м��� php ���룬��ֹ�����ļ������ػ򱻲鿴
		// ���巽����
		$file_path = $this->_baseDirectory . md5($key) . '.cache.php';
		if (is_file($file_path)) unlink($file_path);
  	}
  	function Get($key)
  	{
		// Ҫ�� $key �� $data ���м��
		// ���黺���ļ�����չ���� .php �����ڻ����ļ��м��� php ���룬��ֹ�����ļ������ػ򱻲鿴
		// ���巽����
		$file_path = $this->_baseDirectory . md5($key) . '.cache.php';
  		if(file_exists($file_pathy))
  		{
			// Ҫ�� file_get_contents �ķ���ֵ�����жϣ�����ʡ��
			return unserialize(file_get_contents($file_path));
  		}
  		return null;
  	}
  }
?>