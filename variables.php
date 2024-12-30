<?php

require_once __DIR__ . '/config.php';
$config = getConfig(); 

$graphURL = $config['insta']['graph_api_url'];
$assetsImgPath = $config['paths']['assets_img'];
$assetsFilesPath = $config['paths']['assets_files'];
$assetsCSSPath = $config['paths']['assets_css'];
$instaId = $config['insta']['id_compte'];
$postFields = 'media_url,permalink,media_product_type';
$storiesFields = 'stories';
$storyFields = 'media_url,media_type';
$accessToken = $config['insta']['token'];

return [
      'favicon' => $config['paths']['assets_img'] . '/favicon_mps.ico',
      'logo' => $config['paths']['assets_img'] . '/logo_rong.png',
      'insta_brand' => $config['paths']['assets_brand'] . '/instagram.svg',
      'rep_css' => $config['paths']['assets_css'],
      'carousel' => [
            $assetsImgPath . '/_seniors_maillot_1000.jpg',
            $assetsImgPath . '/u17_groupe.jpg',
            $assetsImgPath . '/Anciens.jpg',
      ],
      'documents' => [
            $assetsFilesPath . '/Fiche d\'adhesion MPS 2024-2025.pdf',
            $assetsFilesPath . '/NEW_PLANNING_2K25_PDF.pdf',
            $assetsFilesPath . '/Reglement_interieur.pdf',
      ],
      'insta_url' => $config['insta']['url_compte'],
      'insta_id' => $instaId,
      'json_feed_url' => "{$graphURL}/{$instaId}/media?fields={$postFields}&access_token={$accessToken}",
      'json_stories_url' => "{$graphURL}/{$instaId}/?fields={$storiesFields}&access_token={$accessToken}",
      'json_story_url' => "{$graphURL}/%s/?fields={$storyFields}&access_token={$accessToken}",
      'boutique_url' => "https://www.instagram.com/s/aGlnaGxpZ2h0OjE3OTY3OTkzMjc4NjA5MDEz?igsh=c25vcTk3bnFmemc1",

];
  
?>