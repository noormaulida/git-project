<?php
header('Content-Type: text/html; charset=UTF-8');
date_default_timezone_set('Asia/Jakarta');


function getTwitter() {
    session_start();
    require_once("twitteroauth/TwitterOauth.php"); //Path to twitteroauth library

    $m = new MongoClient();
    $db = $m->databaseTA;
    $c = $db->news;
    
    $notweets = 30;
    $consumerkey = "4LpnrreGbJOGBxaIjnWeTKbpn";
    $consumersecret = "Z3KdFxFvfbmHz4lITUcESIdihc77QqIZjdojeHFhD9Ve3IDgxh";
    $accesstoken = "86725852-PYK5wioC7NjTE78rK8MHW74Xh69Y3s45tZx7nMhZX";
    $accesstokensecret = "hgtj566hWNj7QThxQgkUI3ybiLeukL3vTmlBOCEWgAN56";
    $twitteruser = "hmtc_its";
    $twitteruser2 = "its_surabaya";
    $twitteruser3 = "e100ss";
     

    function getConnectionWithAccessToken($cons_key, $cons_secret, $oauth_token, $oauth_token_secret) {
      $connection = new TwitterOAuth($cons_key, $cons_secret, $oauth_token, $oauth_token_secret);
      return $connection;
    }

    $connection = getConnectionWithAccessToken($consumerkey, $consumersecret, $accesstoken, $accesstokensecret);

     
    $tweets = $connection->get("https://api.twitter.com/1.1/statuses/user_timeline.json?screen_name=".$twitteruser."&count=".$notweets);
    $tweets2 = $connection->get("https://api.twitter.com/1.1/statuses/user_timeline.json?screen_name=".$twitteruser2."&count=".$notweets);
    $tweets3 = $connection->get("https://api.twitter.com/1.1/statuses/user_timeline.json?screen_name=".$twitteruser3."&count=".$notweets);


    // function defination to convert array to xml
    function array_to_xml($info, &$xml) {
        foreach($info as $key => $value) {
            if(is_array($value)) {
                $key = is_numeric($key) ? "item" : $key;
                $subnode = $xml->addChild("$key");
                array_to_xml($value, $subnode);
            }
            else {
            	$key = is_numeric($key) ? "item" : $key;
                $xml->addChild("$key",htmlspecialchars("$value"));
            }
        }
    }


    $result = json_encode($tweets);
    $values = json_decode($result,true);
    $info = array($values);
    $xml = new SimpleXMLElement("<?xml version=\"1.0\" encoding=\"UTF-8\"?><root></root>");
    array_to_xml($info,$xml);
    $xml->asXML('twitter1.xml');
    $xml2 = simplexml_load_file('twitter1.xml');

    $result3 = json_encode($tweets3);
    $values3 = json_decode($result3,true);
    $info3 = array($values3);
    $xml3 = new SimpleXMLElement("<?xml version=\"1.0\" encoding=\"UTF-8\"?><root></root>");
    array_to_xml($info3,$xml3);
    $xml3->asXML('twitter2.xml');
    $xml6 = simplexml_load_file('twitter2.xml');

    $result2 = json_encode($tweets2);
    $values2 = json_decode($result2,true);
    $info2 = array($values2);
    $xml4 = new SimpleXMLElement("<?xml version=\"1.0\" encoding=\"UTF-8\"?><root></root>");
    array_to_xml($info2,$xml4);
    $xml4->asXML('twitter3.xml');
    $xml8 = simplexml_load_file('twitter3.xml');


    for($i = 0; $i < $notweets; $i++)
    {
        if(substr($xml2->item->item[$i]->text,0,1) != "@") {
            $cursor = $c->findOne(array("name" => strval($xml2->item->item[$i]->user->name), "pubDate" => date('Y m d h:i:s', strtotime($xml2->item->item[$i]->created_at)), 
                "profile_image_url" => strval($xml2->item->item[$i]->user->profile_image_url), "text" => strval($xml2->item->item[$i]->text)
                ));
                    //"retrieve_times" => new MongoDate()));

            if($cursor == null) {
                $c->insert(array("name" => strval($xml2->item->item[$i]->user->name), "pubDate" => date('Y m d h:i:s', strtotime($xml2->item->item[$i]->created_at)), 
                    "profile_image_url" => strval($xml2->item->item[$i]->user->profile_image_url), "text" => strval($xml2->item->item[$i]->text), "source" => "Twitter", "subsource" => "@hmtc_its",
                    "retrieve_times" => date('Y m d h:i:s')
                ));
            }

            echo $xml2->item->item[$i]->user->name;
            echo $xml2->item->item[$i]->text;
            echo "<br />";
            
        }

        if(substr($xml6->item->item[$i]->text,0,1) != "@") {            
            $cursor2 = $c->findOne(array("name" => strval($xml6->item->item[$i]->user->name), "pubDate" => date('Y m d h:i:s', strtotime($xml6->item->item[$i]->created_at)), 
                "profile_image_url" => strval($xml6->item->item[$i]->user->profile_image_url), "text" => strval($xml6->item->item[$i]->text)
                ));
                    //"createdAt" => new MongoDate()));


            if($cursor2 == null) {
            $c->insert(array("name" => strval($xml6->item->item[$i]->user->name), "pubDate" => date('Y m d h:i:s', strtotime($xml6->item->item[$i]->created_at)), 
                "profile_image_url" => strval($xml6->item->item[$i]->user->profile_image_url), "text" => strval($xml6->item->item[$i]->text), "source" => "Twitter", "subsource" => "@E100ss",
                "retrieve_times" => date('Y m d h:i:s')
            ));
            }
        }

        if(substr($xml8->item->item[$i]->text,0,1) != "@") {
            $cursor3 = $c->findOne(array("name" => strval($xml8->item->item[$i]->user->name), "pubDate" => date('Y m d h:i:s', strtotime($xml8->item->item[$i]->created_at)), 
                "profile_image_url" => strval($xml8->item->item[$i]->user->profile_image_url), "text" => strval($xml8->item->item[$i]->text)
                ));
                    //"createdAt" => new MongoDate()));
            

            if($cursor3 == null) {
            $c->insert(array("name" => strval($xml8->item->item[$i]->user->name), "pubDate" => date('Y m d h:i:s', strtotime($xml8->item->item[$i]->created_at)), 
                "profile_image_url" => strval($xml8->item->item[$i]->user->profile_image_url), "text" => strval($xml8->item->item[$i]->text), "source" => "Twitter", "subsource" => "@ITS_Surabaya",
                "retrieve_times" => date('Y m d h:i:s')
            ));
            }
        }
    }
    unlink('twitter1.xml'); 
    unlink('twitter2.xml'); 
    unlink('twitter3.xml'); 
}

function getDetik() {
    $m = new MongoClient();
    $db = $m->databaseTA;
    $c = $db->news;

    $feedUrl = "http://rss.detik.com/index.php/detikcom_nasional";
    $feedContent = "";
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $feedUrl);
    curl_setopt($curl, CURLOPT_TIMEOUT, 3);
    curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_HEADER, false);
    curl_setopt($curl, CURL_HTTP_VERSION_1_1, true);
    curl_setopt($curl, CURLOPT_ENCODING, "gzip, deflate");
    curl_setopt($curl, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.0.3) Gecko/2008092417 Firefox/3.0.3");
    $feedContent = curl_exec($curl);
    curl_close($curl);

    $feedUrl2 = "http://rss.detik.com/index.php/surabaya";
    $feedContent2 = "";
    $curl2 = curl_init();
    curl_setopt($curl2, CURLOPT_URL, $feedUrl2);
    curl_setopt($curl2, CURLOPT_TIMEOUT, 3);
    curl_setopt($curl2, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($curl2, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl2, CURLOPT_HEADER, false);
    curl_setopt($curl2, CURL_HTTP_VERSION_1_1, true);
    curl_setopt($curl2, CURLOPT_ENCODING, "gzip, deflate");
    curl_setopt($curl2, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.0.3) Gecko/2008092417 Firefox/3.0.3");
    $feedContent2 = curl_exec($curl2);
    curl_close($curl2);

    $feedUrl3 = "http://rss.detik.com/index.php/inet";
    $feedContent3 = "";
    $curl3 = curl_init();
    curl_setopt($curl3, CURLOPT_URL, $feedUrl3);
    curl_setopt($curl3, CURLOPT_TIMEOUT, 3);
    curl_setopt($curl3, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($curl3, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl3, CURLOPT_HEADER, false);
    curl_setopt($curl3, CURL_HTTP_VERSION_1_1, true);
    curl_setopt($curl3, CURLOPT_ENCODING, "gzip, deflate");
    curl_setopt($curl3, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.0.3) Gecko/2008092417 Firefox/3.0.3");
    $feedContent3 = curl_exec($curl3);
    curl_close($curl3);


    $doc = new SimpleXmlElement($feedContent, LIBXML_NOCDATA);
    $doc2 = new SimpleXmlElement($feedContent2, LIBXML_NOCDATA);
    $doc3 = new SimpleXmlElement($feedContent3, LIBXML_NOCDATA);
    //print_r($doc);

    function parseRSS($xml, $category, $c, $sub)
    {
        //echo "<strong>".$xml->channel->title."</strong>";
        $cnt = count($xml->channel->item);
        for($i=0; $i<$cnt; $i++)
        {
            $cursor2 = $c->findOne(array("title" => $xml->channel->item[$i]->title, "link" => $xml->channel->item[$i]->link, 
            "description" => $xml->channel->item[$i]->description, "pubDate" => date('Y m d h:i:s', strtotime($xml->channel->item[$i]->pubDate))
            ));
                //"createdAt" => new MongoDate()));


            if($cursor2 == null) {
            $c->insert(array("title" => $xml->channel->item[$i]->title, "link" => $xml->channel->item[$i]->link, 
            "description" => strip_tags($xml->channel->item[$i]->description), "pubDate" => date('Y m d h:i:s', strtotime($xml->channel->item[$i]->pubDate)), "source" => $category, "subsource" => $sub,
            "retrieve_times" => date('Y m d h:i:s')
            ));
            }
     
        //echo '<a href="'.$url.'">'.$title.'</a>'.$desc.'';
        }
    }

    function parseAtom($xml, $category, $c, $sub)
    {
        //echo "<strong>".$xml->author->name."</strong>";
        $cnt = count($xml->entry);
        for($i=0; $i<$cnt; $i++)
        {
            $urlAtt = $xml->entry->link[$i]->attributes();
            $url    = $urlAtt['href'];
            $title  = $xml->entry->title;
            $desc   = strip_tags($xml->entry->content);

            $cursor2 = $c->findOne(array("title" => $title, "link" => $url, 
                "description" => $desc
                ));
                    //"createdAt" => new MongoDate()));


            if($cursor2 == null) {
                $c->insert(array("title" => $title, "link" => $url, 
                "description" => $desc, "source" => $category, "subsource" => $sub, "retrieve_times" => date('Y m d h:i:s')
                ));
            }
        }
     
        //echo '<a href="'.$url.'">'.$title.'</a>'.$desc.'';        
    }

    if(isset($doc->channel))
    {
        parseRSS($doc, 'Detik.com', $c, 'Nasional');
    }
    elseif(isset($doc->entry))
    {
        parseAtom($doc, 'Detik.com', $c, 'Nasional');
    }

    if(isset($doc2->channel))
    {
        parseRSS($doc2, 'Detik.com', $c, 'Surabaya');
    }
    elseif(isset($doc2->entry))
    {
        parseAtom($doc2, 'Detik.com', $c, 'Surabaya');
    }

    if(isset($doc3->channel))
    {
        parseRSS($doc3, 'Detik.com', $c, 'Teknologi');
    }
    elseif(isset($doc3->entry))
    {
        parseAtom($doc3, 'Detik.com', $c, 'Teknologi');
    }
}


function getBeasiswa() {
    $m = new MongoClient();
    $db = $m->databaseTA;
    $c = $db->beasiswa;

    $feedUrl = "http://www.infobeasiswa.net/beasiswa-s1/feed/";
    $feedContent = "";
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $feedUrl);
    curl_setopt($curl, CURLOPT_TIMEOUT, 3);
    curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_HEADER, false);
    curl_setopt($curl, CURL_HTTP_VERSION_1_1, true);
    curl_setopt($curl, CURLOPT_ENCODING, "gzip, deflate");
    curl_setopt($curl, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.0.3) Gecko/2008092417 Firefox/3.0.3");
    $feedContent = curl_exec($curl);
    curl_close($curl);

    $feedUrl2 = "http://www.infobeasiswa.net/beasiswa-s2/feed/";
    $feedContent2 = "";
    $curl2 = curl_init();
    curl_setopt($curl2, CURLOPT_URL, $feedUrl2);
    curl_setopt($curl2, CURLOPT_TIMEOUT, 3);
    curl_setopt($curl2, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($curl2, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl2, CURLOPT_HEADER, false);
    curl_setopt($curl2, CURL_HTTP_VERSION_1_1, true);
    curl_setopt($curl2, CURLOPT_ENCODING, "gzip, deflate");
    curl_setopt($curl2, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.0.3) Gecko/2008092417 Firefox/3.0.3");
    $feedContent2 = curl_exec($curl2);
    curl_close($curl2);

    $feedUrl3 = "http://www.infobeasiswa.net/beasiswa-s3/feed/";
    $feedContent3 = "";
    $curl3 = curl_init();
    curl_setopt($curl3, CURLOPT_URL, $feedUrl3);
    curl_setopt($curl3, CURLOPT_TIMEOUT, 3);
    curl_setopt($curl3, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($curl3, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl3, CURLOPT_HEADER, false);
    curl_setopt($curl3, CURL_HTTP_VERSION_1_1, true);
    curl_setopt($curl3, CURLOPT_ENCODING, "gzip, deflate");
    curl_setopt($curl3, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.0.3) Gecko/2008092417 Firefox/3.0.3");
    $feedContent3 = curl_exec($curl3);
    curl_close($curl3);


    $doc = new SimpleXmlElement($feedContent, LIBXML_NOCDATA);
    $doc2 = new SimpleXmlElement($feedContent2, LIBXML_NOCDATA);
    $doc3 = new SimpleXmlElement($feedContent3, LIBXML_NOCDATA);
    //print_r($doc);

    function BoyerMoore($text, $pattern) {
    $patlen = strlen($pattern);
    $textlen = strlen($text);
    $table = setTable($pattern);
 
    for ($i=$patlen-1; $i < $textlen;) { 
        $t = $i;
        for ($j=$patlen-1; $pattern[$j]==$text[$i]; $j--,$i--) { 
            if($j == 0) 
               return $i;
        }
        $i = $t;
        if(array_key_exists($text[$i], $table))
            $i = $i + max($table[$text[$i]], 1);
        else
            $i += $patlen;
    }
    return -1;
    }
     
    function setTable($string) {
        $len = strlen($string);
        $table = array();
        for ($i=0; $i < $len; $i++) { 
            $table[$string[$i]] = $len - $i - 1; 
        }
        return $table;
    }


    function parseRSSB($xml, $category, $c, $sub)
    {
        //echo "<strong>".$xml->channel->title."</strong>";
        $cnt = count($xml->channel->item);
        for($i=0; $i<$cnt; $i++)
        {
            echo $i." "."<br />";
            echo $xml->channel->item[$i]->category."<br />";//BoyerMoore($xml->channel->item[$i]->category, 'Australia') .'<br />';
            //if(BoyerMoore($xml->channel->item[$i]->category, 'Australia') != -1) {
                $cursor2 = $c->findOne(array("title" => $xml->channel->item[$i]->title, "link" => $xml->channel->item[$i]->link, 
                "description" => $xml->channel->item[$i]->description, "pubDate" => date('Y m d h:i:s', strtotime($xml->channel->item[$i]->pubDate))
                ));
                    //"createdAt" => new MongoDate()));


                if($cursor2 == null) {
                $c->insert(array("title" => $xml->channel->item[$i]->title, "link" => $xml->channel->item[$i]->link, 
                "description" => strip_tags($xml->channel->item[$i]->description), "pubDate" => date('Y m d h:i:s', strtotime($xml->channel->item[$i]->pubDate)), "source" => $category, "subsource" => $sub,
                "retrieve_times" => date('Y m d h:i:s')
                ));
                }
            //}
        echo '<br /><br />';
        //echo '<a href="'.$url.'">'.$title.'</a>'.$desc.'';
        }
    }

    function parseAtomB($xml, $category, $c, $sub)
    {
        //echo "<strong>".$xml->author->name."</strong>";
        $cnt = count($xml->entry);
        for($i=0; $i<$cnt; $i++)
        {
            echo $i." "."<br />";
            echo $xml->channel->item[$i]->category .'<br />';
            if(BoyerMoore(trip_tags($xml->entry->content), 'Australia') != -1) {
                $urlAtt = $xml->entry->link[$i]->attributes();
                $url    = $urlAtt['href'];
                $title  = $xml->entry->title;
                $desc   = strip_tags($xml->entry->content);

                $cursor2 = $c->findOne(array("title" => $title, "link" => $url, 
                    "description" => $desc
                    ));
                        //"createdAt" => new MongoDate()));


                if($cursor2 == null) {
                    $c->insert(array("title" => $title, "link" => $url, 
                    "description" => $desc, "source" => $category, "retrieve_times" => date('Y m d h:i:s'), "subsource" => $sub,
                    ));
                }
            }
            
        }
     
        //echo '<a href="'.$url.'">'.$title.'</a>'.$desc.'';        
    }

    if(isset($doc->channel))
    {
        parseRSSB($doc, 'Beasiswa.net', $c, 'S1');
    }
    elseif(isset($doc->entry))
    {
        parseAtomB($doc, 'Beasiswa.net', $c, 'S1');
    }

    if(isset($doc2->channel))
    {
        parseRSSB($doc2, 'Beasiswa.net', $c, 'S1');
    }
    elseif(isset($doc2->entry))
    {
        parseAtomB($doc2, 'Beasiswa.net', $c, 'S1');
    }

    if(isset($doc3->channel))
    {
        parseRSSB($doc3, 'Beasiswa.net', $c, 'S1');
    }
    elseif(isset($doc3->entry))
    {
        parseAtomB($doc3, 'Beasiswa.net', $c, 'S1');
    }
}


function getITSNews() {
    $m = new MongoClient();
    $db = $m->databaseTA;
    $c = $db->times;

    $feedUrl = "http://www.if.its.ac.id/feed/";
    $feedContent = "";
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $feedUrl);
    curl_setopt($curl, CURLOPT_TIMEOUT, 3);
    curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_HEADER, false);
    curl_setopt($curl, CURL_HTTP_VERSION_1_1, true);
    curl_setopt($curl, CURLOPT_ENCODING, "gzip, deflate");
    curl_setopt($curl, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.0.3) Gecko/2008092417 Firefox/3.0.3");
    $feedContent = curl_exec($curl);
    curl_close($curl);

    $feedUrl2 = "http://hmtc.if.its.ac.id/feed/";
    $feedContent2 = "";
    $curl2 = curl_init();
    curl_setopt($curl2, CURLOPT_URL, $feedUrl2);
    curl_setopt($curl2, CURLOPT_TIMEOUT, 3);
    curl_setopt($curl2, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($curl2, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl2, CURLOPT_HEADER, false);
    curl_setopt($curl2, CURL_HTTP_VERSION_1_1, true);
    curl_setopt($curl2, CURLOPT_ENCODING, "gzip, deflate");
    curl_setopt($curl2, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.0.3) Gecko/2008092417 Firefox/3.0.3");
    $feedContent2 = curl_exec($curl2);
    curl_close($curl2);

    $doc = new SimpleXmlElement($feedContent, LIBXML_NOCDATA);
    $doc2 = new SimpleXmlElement($feedContent2, LIBXML_NOCDATA);

    function parseRSSI($xml, $category, $c)
    {
        //echo "<strong>".$xml->channel->title."</strong>";
        $cnt = count($xml->channel->item);
        for($i=0; $i<$cnt; $i++)
        {
            
            $cursor2 = $c->findOne(array("title" => $xml->channel->item[$i]->title, "link" => $xml->channel->item[$i]->link, 
                "description" => $xml->channel->item[$i]->description, "pubDate" => $xml->channel->item[$i]->pubDate
                ));
                    //"createdAt" => new MongoDate()));


            if($cursor2 == null) {
                $c->insert(array("title" => $xml->channel->item[$i]->title, "link" => $xml->channel->item[$i]->link, 
                "description" => strip_tags($xml->channel->item[$i]->description), "pubDate" => $xml->channel->item[$i]->pubDate, "subsource" => $category, "source" => 'ITS',
                "retrieve_times" => date('Y m d h:i:s')
                ));
            }            
        }
    }

    function parseAtomI($xml, $category, $c)
    {
        //echo "<strong>".$xml->author->name."</strong>";
        $cnt = count($xml->entry);
        for($i=0; $i<$cnt; $i++)
        {
            echo $i." "."<br />";
            echo $xml->channel->item[$i]->category .'<br />';
            if(BoyerMoore(trip_tags($xml->entry->content), 'Australia') != -1) {
                $urlAtt = $xml->entry->link[$i]->attributes();
                $url    = $urlAtt['href'];
                $title  = $xml->entry->title;
                $desc   = strip_tags($xml->entry->content);

                $cursor2 = $c->findOne(array("title" => $title, "link" => $url, 
                    "description" => $desc
                    ));
                        //"createdAt" => new MongoDate()));


                if($cursor2 == null) {
                    $c->insert(array("title" => $title, "link" => $url, 
                    "description" => $desc, "subsource" => $category, "retrieve_times" => date('Y m d h:i:s'), "source" => 'ITS'
                    ));
                }
            }
            
        }
     
        //echo '<a href="'.$url.'">'.$title.'</a>'.$desc.'';        
    }

    if(isset($doc->channel))
    {
        parseRSSI($doc, 'if.its.ac.id', $c);
    }
    elseif(isset($doc->entry))
    {
        parseAtomI($doc, 'if.its.ac.id', $c);
    }

    if(isset($doc2->channel))
    {
        parseRSSI($doc2, 'hmtc.if.its.ac.id', $c);
    }
    elseif(isset($doc2->entry))
    {
        parseAtomI($doc2, 'hmtc.if.its.ac.id', $c);
    }
}

getTwitter();
getDetik();
getBeasiswa();
getITSNews();
?>