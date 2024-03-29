<?php
//checks ifthe tag post is there and if its been a proper form post
// tagで検索
if(isset($_REQUEST['tag']) ){
	ItemSearch("Books", $_REQUEST['tag']);
}

//Set up the operation in the request
function ItemSearch($SearchIndex, $Keywords){

	// Google APIの仕様に沿ったリクエスト出力用のPHPスクリプト
	$base_request = "https://www.googleapis.com/books/v1/volumes?q=$Keywords";
	$google_book = json_decode(file_get_contents($base_request));

	foreach($google_book->items as $item) {

		$item_title 	= $item->volumeInfo->title; // 商品名
		$item_author 	= $item->volumeInfo->authors; // 著者
		$item_publish 	= $item->volumeInfo->publishedDate; // 発売日
		$item_publisher = $item->volumeInfo->publisher; // 出版社
		$item_isbn 	= $item->volumeInfo->industryIdentifiers[0]->identifier;
		$item_price 	= $item->saleInfo->retailPrice->amount;
		$item_url 	= $item->selfLink; // 商品のURL
		$item_image	= $item->imageLinks->thumbnail; // 商品の画像

		$tagValue[] = array($item_title, $item_price, $item_isbn); 

	} // foreach end

        echo json_encode(array("VALUE", $Keywords, $tagValue));
} 
