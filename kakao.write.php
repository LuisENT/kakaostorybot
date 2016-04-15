<?php
	require_once ("kakao.config.php"); // 기본 설정 불러오기
	require_once ("kakao.content.php"); // 작성 컨텐츠 사전 저장
	require_once ("kakao.login.php"); // 기본 로그인 세션 저장
	require_once ("kakao.permission.php") // 기본 게시물 권한 
	// require_once ("kakao.get_comment.php") // 댓글 가져오기
	// require_once ("kakao.get_lib_comment.php") // 댓글 데이터 불러오기
	// require_once ("kakao.get_charater.php") // 캐릭터 설정
	
	
	/* 기본 사용 함수 
	
	permission + 권한설정 및 공유 설정
	* ALL = 전체 가능
	* ALL_Share = 전체공개, 공유 불가능
	* Friend = 친구 공개, 친구만 공유가능
	* Freiend_sahre = 친구공개, 공유 불가능
	* Me = 나만 공개
	
	 기타 콘텐츠 사용 함수 
	content + 일반적 게시글 컨텐츠
	
	*content_comment 댓글 푸시 컨텐츠
	*content_comment_allow 댓글 수신 컨텐츠
	*content_comment_send 댓글 전송
	
	
	*/
	
	
	$token = $_SESSION['token'];
	$refresh_token = $_SESSION['refresh_token'];

	$i = 1;

	ini_set('max_execution_time', 0); // 실행시간 설정
	
	while ($i < 100) {
		$rand_num = rand(1,10); // 1부터 10중 랜덤으로 생성
		switch($rand_num) { // 랜덤한 케이스로 이동 
			case "1" :
				$params = sprintf( 'content=1&permission=F&enable_share={$share}'); 
				$opts = array( 
				CURLOPT_HTTPHEADER => array(
					"Authorization: Bearer {$token}"
				),
				CURLOPT_URL => "https://kapi.kakao.com/v1/api/story/post/note", 
				CURLOPT_SSL_VERIFYPEER => false,  // 만약 등록에 실패할 경우  SSL로 연결한다.
					CURLOPT_SSLVERSION => 1, // 
				CURLOPT_POST => true, 
				CURLOPT_POSTFIELDS => $params, 
				CURLOPT_RETURNTRANSFER => true, 
				);
				$curl = curl_init();
				curl_setopt_array($curl, $opts);
				$result = curl_exec($curl);
				curl_close($curl);
				break;
			case "2" :
				$params = sprintf( 'content=2&permission=F&enable_share=false'); 
				$opts = array( 
				CURLOPT_HTTPHEADER => array(
					"Authorization: Bearer {$token}"
				),
				CURLOPT_URL => "https://kapi.kakao.com/v1/api/story/post/note", 
				CURLOPT_SSL_VERIFYPEER => false, 
					CURLOPT_SSLVERSION => 1,
				CURLOPT_POST => true, 
				CURLOPT_POSTFIELDS => $params, 
				CURLOPT_RETURNTRANSFER => true, 
				);
				$curl = curl_init();
				curl_setopt_array($curl, $opts);
				$result = curl_exec($curl);
				curl_close($curl);
				break;
			case "3" :
				$params = sprintf( 'content=3&permission=F&enable_share=false'); 
				$opts = array( 
				CURLOPT_HTTPHEADER => array(
					"Authorization: Bearer {$token}"
				),
				CURLOPT_URL => "https://kapi.kakao.com/v1/api/story/post/note", 
				CURLOPT_SSL_VERIFYPEER => false, 
					CURLOPT_SSLVERSION => 1,
				CURLOPT_POST => true, 
				CURLOPT_POSTFIELDS => $params, 
				CURLOPT_RETURNTRANSFER => true, 
				);
				$curl = curl_init();
				curl_setopt_array($curl, $opts);
				$result = curl_exec($curl);
				curl_close($curl);
				break;
			case "4" :
				$params = sprintf( 'content=4&permission=F&enable_share=false'); 
				$opts = array( 
				CURLOPT_HTTPHEADER => array(
					"Authorization: Bearer {$token}"
				),
				CURLOPT_URL => "https://kapi.kakao.com/v1/api/story/post/note", 
				CURLOPT_SSL_VERIFYPEER => false, 
					CURLOPT_SSLVERSION => 1,
				CURLOPT_POST => true, 
				CURLOPT_POSTFIELDS => $params, 
				CURLOPT_RETURNTRANSFER => true, 
				);
				$curl = curl_init();
				curl_setopt_array($curl, $opts);
				$result = curl_exec($curl);
				curl_close($curl);
				break;
			case "5" :
				$params = sprintf( 'content=5&permission=F&enable_share=false'); 
				$opts = array( 
				CURLOPT_HTTPHEADER => array(
					"Authorization: Bearer {$token}"
				),
				CURLOPT_URL => "https://kapi.kakao.com/v1/api/story/post/note", 
				CURLOPT_SSL_VERIFYPEER => false, 
					CURLOPT_SSLVERSION => 1,
				CURLOPT_POST => true, 
				CURLOPT_POSTFIELDS => $params, 
				CURLOPT_RETURNTRANSFER => true, 
				);
				$curl = curl_init();
				curl_setopt_array($curl, $opts);
				$result = curl_exec($curl);
				curl_close($curl);
				break;
			case "6" :
				$params = sprintf( 'content=6&permission=F&enable_share=false'); 
				$opts = array( 
				CURLOPT_HTTPHEADER => array(
					"Authorization: Bearer {$token}"
				),
				CURLOPT_URL => "https://kapi.kakao.com/v1/api/story/post/note", 
				CURLOPT_SSL_VERIFYPEER => false, 
					CURLOPT_SSLVERSION => 1,
				CURLOPT_POST => true, 
				CURLOPT_POSTFIELDS => $params, 
				CURLOPT_RETURNTRANSFER => true, 
				);
				$curl = curl_init();
				curl_setopt_array($curl, $opts);
				$result = curl_exec($curl);
				curl_close($curl);
				break;
			case "7" :
				$params = sprintf( 'content=7&permission=F&enable_share=false'); 
				$opts = array( 
				CURLOPT_HTTPHEADER => array(
					"Authorization: Bearer {$token}"
				),
				CURLOPT_URL => "https://kapi.kakao.com/v1/api/story/post/note", 
				CURLOPT_SSL_VERIFYPEER => false, 
					CURLOPT_SSLVERSION => 1,
				CURLOPT_POST => true, 
				CURLOPT_POSTFIELDS => $params, 
				CURLOPT_RETURNTRANSFER => true, 
				);
				$curl = curl_init();
				curl_setopt_array($curl, $opts);
				$result = curl_exec($curl);
				curl_close($curl);
				break;
			case "8" :
				$params = sprintf( 'content=8&permission=F&enable_share=false'); 
				$opts = array( 
				CURLOPT_HTTPHEADER => array(
					"Authorization: Bearer {$token}"
				),
				CURLOPT_URL => "https://kapi.kakao.com/v1/api/story/post/note", 
				CURLOPT_SSL_VERIFYPEER => false, 
					CURLOPT_SSLVERSION => 1,
				CURLOPT_POST => true, 
				CURLOPT_POSTFIELDS => $params, 
				CURLOPT_RETURNTRANSFER => true, 
				);
				$curl = curl_init();
				curl_setopt_array($curl, $opts);
				$result = curl_exec($curl);
				curl_close($curl);
				break;
			case "9" :
				$params = sprintf( 'content=9&permission=F&enable_share=false'); 
				$opts = array( 
				CURLOPT_HTTPHEADER => array(
					"Authorization: Bearer {$token}"
				),
				CURLOPT_URL => "https://kapi.kakao.com/v1/api/story/post/note", 
				CURLOPT_SSL_VERIFYPEER => false, 
					CURLOPT_SSLVERSION => 1,
				CURLOPT_POST => true, 
				CURLOPT_POSTFIELDS => $params, 
				CURLOPT_RETURNTRANSFER => true, 
				);
				$curl = curl_init();
				curl_setopt_array($curl, $opts);
				$result = curl_exec($curl);
				curl_close($curl);
				break;
			case "10" :
				$params = sprintf( 'content=10&permission=F&enable_share=false'); 
				$opts = array( 
				CURLOPT_HTTPHEADER => array(
					"Authorization: Bearer {$token}"
				),
				CURLOPT_URL => "https://kapi.kakao.com/v1/api/story/post/note", 
				CURLOPT_SSL_VERIFYPEER => false, 
					CURLOPT_SSLVERSION => 1,
				CURLOPT_POST => true, 
				CURLOPT_POSTFIELDS => $params, 
				CURLOPT_RETURNTRANSFER => true, 
				);
				$curl = curl_init();
				curl_setopt_array($curl, $opts);
				$result = curl_exec($curl);
				curl_close($curl);
				break;
		}
		sleep(600); // 케이스를 실행하고 대기하는 시간, ( 초단위로 입력 )
	}
?>
