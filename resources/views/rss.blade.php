<?=
'<?xml version="1.0" encoding="UTF-8"?>'.PHP_EOL
?>
<rss version="2.0"
     xmlns:sam="https://www.govtdata.org/sam_bot/ns/"
     xmlns:content="http://purl.org/rss/1.0/modules/content/"
     xmlns:dc="http://purl.org/dc/elements/1.1/"
>
    <channel>
        <title><![CDATA[ POPVOX Foundation Sam Bot ]]></title>
        <link><![CDATA[ https://www.govtdata.org/sam_bot ]]></link>
        <description><![CDATA[ Curated list from Sam.gov ]]></description>
        <dc:language>en</dc:language>
        <pubDate>{{ now()->toRfc7231String() }}</pubDate>
        @foreach($datapoints as $opp)
        <item>
            <dc:identifier><![CDATA[{{ $opp['id'] }}]]></dc:identifier>
            <title><![CDATA[{{ $opp['name'] }}]]></title>
            <link><![CDATA[{{ $opp['websiteUrl'] }}]]></link>
            <dc:date><![CDATA[{{ $opp['publishDate'] }}]]></dc:date>
            <sam:solicitationNumber><![CDATA[{{ $opp['solicitationNumber'] }}]]></sam:solicitationNumber>
            <sam:organization><![CDATA[{{ $opp['org'] }}]]></sam:organization>
        </item>
        @endforeach
    </channel>
</rss>

