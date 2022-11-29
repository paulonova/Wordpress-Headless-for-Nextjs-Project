<?php get_header();?>


<?php 
function get_books_api2(){
  
  $app_id =  '35adda52-60c9-41f5-831d-d22a028f4d50';
  $secret = '6h3qP8D8HMOQ4nE2';
  $key =  'aAb2tfXn79reVUIJIYGwsQy1aAQNzHzr';

  $url = "https://api.nytimes.com/svc/books/v3/lists/best-sellers/history.json?api-key=$key&offset=20";
  $args = array(
      'headers' => array(    
        'Content-Type' => 'application/json'
      ),
      'body' => array( ),
    );
    $response = wp_remote_get($url, $args);

    $response_code = wp_remote_retrieve_response_code( $response );
    $body = wp_remote_retrieve_body( $response );

    
    if(401 === $response_code){
      return 'Unauthorized access';
    }
    if(200 !== $response_code){
      return 'Error in pinging API';
    }
    if(200 === $response_code){
      return $body;
    }

}

function getApi(){

  $url = "https://gorest.co.in/public/v1/posts";
  $args = array(
      'headers' => array(    
        'Content-Type' => 'application/json'
      ),
      'body' => array( ),
    );

    $response = wp_remote_get($url, $args);
    $response_code = wp_remote_retrieve_response_code( $response );
    $body = wp_remote_retrieve_body( $response );

    if(401 === $response_code){
      return 'Unauthorized access';
    }
    if(200 !== $response_code){
      return 'Error in pinging API';
    }
    if(200 === $response_code){
      return $body;
    }

}

//Get the extern info and parse into json format
$info_books = json_decode(get_books_api2())->results;
$info_posts = json_decode(getApi())->data;
//var_dump($info_posts);
//var_dump($info_posts);

?>

<section class="content-block">

  <div class="left-block">

    <?php foreach($info_posts as $res):?>
      <div class="posts-container">
        <div class="content-info">
          <h2><?php echo $res->title?></h2>
        </div>
        <div class="info-body">
          <p><?php echo $res->body?></p>
          <p><?php echo $res->user_id?></p>
        </div>
      

      </div>

    <?php endforeach;?>

  </div>


  <div class="right-block">

    <?php foreach($info_books as $result){  ?>

      <div class="card-book">
        <div class="image-block"> 
          <div class="image"></div>
        </div>

        <div class="info-block">

          <h2><?php echo $result->title?></h2>
          <div class="info-block_desc">
            <p><?php echo $result->description?></p>
            <small>Contributor: <?php echo $result->contributor?></small>
            <small>Author: <?php echo $result->author?></small>
          </div>

          <div class="price">
            <p><?php echo $result->price . " kr"?></p>
            <p><?php echo $result->publisher ?></p>
          </div>

        </div>

      </div>

    <?php }  ?>
  </div>

</section>

