<?=
'<?xml version="1.0" encoding="UTF-8"?>'.PHP_EOL
?>
<rss version="2.0">
    <channel>
        <title><![CDATA[ www.popvox.com ]]></title>
        <link><![CDATA[ https://www.popvox.com/feed ]]></link>
        <description><![CDATA[ Some description ]]></description>
        <language>en</language>
        <pubDate>{{ now() }}</pubDate>

        @foreach($datapoints as $opp)
            <item>
                <title><![CDATA[{{ $opp['name'] }}]]></title>
                <url>{{ $opp['websiteUrl'] }}</url>
                <publishedDate><![CDATA[{{ $opp['publishDate'] }}]]></publishedDate>
                <solicitationNumber><![CDATA[{{ $opp['solicitationNumber'] }}]]></solicitationNumber>
                <organization><![CDATA[{{ $opp['org'] }}]]></organization>
                <id><![CDATA[{{ $opp['id'] }}]]></id>
            </item>
        @endforeach
    </channel>
</rss>

