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
		  if (!is_dir($baseDirectory)) throw new InvalidArgumentException('目录不存在');

		  if ('\\' === DIRECTORY_SEPARATOR)
		  {
			// windows 系统下，要把路径中的“\”转为“/”，这样可以兼容 xUnix 系统
			$baseDirectory = str_replace(array('\\', '//'), '/', $baseDirectory);
		  }
		  $len = strlen($baseDirectory);
		  if ('/' !== $baseDirectory{$len-1})
		  {
			  // $baseDirectory{0} 这表示，访问 $baseDirectory 的第一个字符
			  // $baseDirectory 最后一个字符不是“/”，要加上
			  $baseDirectory .= '/';
		  }
		  $this->_baseDirectory = $baseDirectory;
	  }
  	function Add($key,$data)
  	{
		// 要对 $key 和 $data 进行检查，此处省略
		// 建议缓存文件的扩展名用 .php ，并在缓存文件中加入 php 代码，防止缓存文件被下载或被查看
		// 具体方法略
		$file_path = $this->_baseDirectory . md5($key) . '.cache.php';
		file_put_contents($file_path, serialize($data));
  	}
  	function Delete($key)
  	{
		// 要对 $key 和 $data 进行检查
		// 建议缓存文件的扩展名用 .php ，并在缓存文件中加入 php 代码，防止缓存文件被下载或被查看
		// 具体方法略
		$file_path = $this->_baseDirectory . md5($key) . '.cache.php';
		if (is_file($file_path)) unlink($file_path);
  	}
  	function Get($key)
  	{
		// 要对 $key 和 $data 进行检查
		// 建议缓存文件的扩展名用 .php ，并在缓存文件中加入 php 代码，防止缓存文件被下载或被查看
		// 具体方法略
		$file_path = $this->_baseDirectory . md5($key) . '.cache.php';
  		if(file_exists($file_pathy))
  		{
			// 要对 file_get_contents 的返回值进行判断，这里省略
			return unserialize(file_get_contents($file_path));
  		}
  		return null;
  	}
  }
?>