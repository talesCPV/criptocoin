<?php

    require('vendor/autoload.php');

    use Symfony\Component\HttpClient\HttpClient;
    use Symfony\Component\BrowserKit\HttpBrowser;
    use Symfony\Component\DomCrawler\Crawler;

    if (isset($_POST["url"])) {

        $url = $_POST['url'];

        $browser = new HttpBrowser(HttpClient::create());

        $crawler = $browser->request('GET',$url);

        $html = $crawler->html();
/*
        $craw = new Crawler($html);

        var_dump($crawler);

        foreach ($craw as $domElement) {
            var_dump($domElement);
        }
*/
        print($html);

    }

?>