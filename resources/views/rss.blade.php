<?=
'<?xml version="1.0" encoding="UTF-8"?>'.PHP_EOL
?>
<rss version="2.0">
    <channel>
        <title><![CDATA[ POPVOX Foundation Sam Bot ]]></title>
        <link><![CDATA[ https://www.govtdata.org/sam_bot ]]></link>
        <description><![CDATA[ Curated list from Sam.gov ]]></description>
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

