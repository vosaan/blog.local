<?php
class PostsManagment{
	public static function allPosts($link){
		$sql = "SELECT * FROM %s";
		$query = sprintf($sql, 'records');
		$result = mysqli_query($link, $query);
		$allPostsArr = mysqli_fetch_all($result, MYSQLI_ASSOC);
		return $allPostsArr;
	}

	public static function postsById($link, $id){
		$sql = "SELECT * FROM records WHERE id=%d";
		$query = sprintf($sql, $id);
		$result = mysqli_query($link, $query) or die(mysqli_error($link));
		$one_record = mysqli_fetch_assoc($result);
		return $one_record;
	}

	public static function delById($link, $id){
		$sql = "DELETE FROM records WHERE id=%d";
		$query = sprintf($sql, $id);
		$result = mysqli_query($link, $query) or die(mysqli_error($link));
		return mysqli_affected_rows($link); //возвращает кортеж - кол-во строк, к которым применилась операция (1 или 0)
	}

	public static function addPost($link, $title, $message, $date){
		$title = trim($title);
        $message = trim($message);

        if($title == "") return false;

        $sql = "INSERT INTO records (title, date, message) VALUES ('%s', '%s', '%s')";

        $query = sprintf($sql, 
                         mysqli_real_escape_string($link, $title), 
                         mysqli_real_escape_string($link, $date),
                         mysqli_real_escape_string($link, $message));

        $result = mysqli_query($link, $query);

        if(!$result) die (mysqli_error($link));
        return true;
		/*$link = self::connect();
		//if($title == "") return false;
		$sql = "INSERT INTO records (title, message, date) VALUES (%s, %s, %s)";
		$query = sprintf($sql, $title, $message, $date);
		$result = mysqli_query(self::connect(), $query);
		if (!$result) die (mysqli_error($link));*/
	}

	public static function editById($link, $id, $title, $message, $date){
		$title = trim($title);
        $message = trim($message);
        $date = trim($date);
        //$id = (int)$id;

        if($title == "") return false;

        $sql = "UPDATE records SET title='%s', message='%s', date='%s'  WHERE id='%d'";
		
        $query = sprintf($sql, 
                         mysqli_real_escape_string($link, $title), 
                         mysqli_real_escape_string($link, $message),
                         mysqli_real_escape_string($link, $date),
                         $id);

        $result = mysqli_query($link, $query);
		if(!$result) die(mysqli_error($link));

		return mysqli_affected_rows($link);//возвращает кортеж - кол-во строк, к которым применилась операция (1 или 0)
	}

	public static function postIntro($post, $len = 200){
		return mb_substr($post, 0, $len);
	}	
}
?>