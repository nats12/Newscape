<?php

use Illuminate\Database\Seeder;

class SourcesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sources')->delete();

    	$sources = array(
    		array(
    			'source_id' => 'abc-news-au',
    			'name' => 'ABC News (AU)',
    			'description' => 'Australia\'s most trusted source of local, national and world news. Comprehensive, independent, in-depth analysis, the latest business, sport, weather and more.',
    			'url' => 'http://www.abc.net.au/news',
    			'category' => 'general',
    			'language' => 'en',
    			'country' => 'au',
    			'logoUrl' => 'http://logo.clearbit.com/www.abc.net.au'
    		),

    		array(
    			'source_id' => 'al-jazeera-english',
    			'name' => 'Al Jazeera English',
    			'description' => 'News, analysis from the Middle East and worldwide, multimedia and interactives, opinions, documentaries, podcasts, long reads and broadcast schedule.',
    			'url' => 'http://www.aljazeera.com',
    			'category' => 'general',
    			'country' => 'us',
    			'language' => 'en',
    			'logoUrl' => 'http://logo.clearbit.com/www.aljazeera.com'
    		),

    		array(
    			'source_id' => 'ars-technica',
    			'name' => 'Ars Technica',
    			'description' => 'The PC enthusiast\'s resource. Power users and the tools they love, without computing religion.',
    			'url' => 'http://arstechnica.com',
    			'category' => 'technology',
    			'language' => 'en',
    			'country' => 'us',
    			'logoUrl' => 'http://logo.clearbit.com/arstechnica.com'
    		),

    		array(
    			'source_id' => 'associated-press',
    			'name' => 'Associated Press',
    			'description' => 'The AP delivers in-depth coverage on the international, politics, lifestyle, business, and entertainment news.',
    			'url' => 'https://apnews.com/',
    			'category' => 'general',
    			'language' => 'en',
    			'country' => 'us',
    			'logoUrl' => 'http://logo.clearbit.com/apnews.com'
    		),

    		array(
    			'source_id' => 'bbc-news',
    			'name' => 'BBC News',
    			'description' => 'Use BBC News for up-to-the-minute news, breaking news, video, audio and feature stories. BBC News provides trusted World and UK news as well as local and regional perspectives. Also entertainment, business, science, technology and health news.',
    			'url' => 'http://www.bbc.co.uk/news',
    			'category' => 'general',
    			'language' => 'en',
    			'country' => 'gb',
    			'logoUrl' => 'http://logo.clearbit.com/www.bbc.co.uk'
    		),

    		array(
    			'source_id' => 'bbc-sport',
    			'name' => 'BBC Sport',
    			'description' => 'The home of BBC Sport online. Includes live sports coverage, breaking news, results, video, audio and analysis on Football, F1, Cricket, Rugby Union, Rugby League, Golf, Tennis and all the main world sports, plus major events such as the Olympic Games.',
    			'url' => 'http://www.bbc.co.uk/sport',
    			'category' => 'sport',
    			'language' => 'en',
    			'country' => 'gb',
    			'logoUrl' => 'http://logo.clearbit.com/www.bbc.co.uk'
    		),

    		array(
    			'source_id' => 'bild',
    			'name' => 'Bild',
    			'description' => 'Die Seite 1 für aktuelle Nachrichten und Themen, Bilder und Videos aus den Bereichen News, Wirtschaft, Politik, Show, Sport, und Promis.',
    			'url' => 'http://www.bild.de',
    			'category' => 'general',
    			'language' => 'de',
    			'country' => 'de',
    			'logoUrl' => 'http://logo.clearbit.com/www.bild.de'
    		),

    		array(
    			'source_id' => 'bloomberg',
    			'name' => 'Bloomberg',
    			'description' => 'Bloomberg delivers business and markets news, data, analysis, and video to the world, featuring stories from Businessweek and Bloomberg News.',
    			'url' => 'http://www.bloomberg.com',
    			'category' => 'business',
    			'language' => 'en',
    			'country' => 'us',
    			'logoUrl' => 'http://logo.clearbit.com/www.bloomberg.com'
    		),

    		array(
    			'source_id' => 'breitbart-news',
    			'name' => 'Breitbart News',
    			'description' => 'Syndicated news and opinion website providing continuously updated headlines to top news and analysis sources.',
    			'url' => 'http://www.breitbart.com',
    			'category' => 'politics',
    			'language' => 'en',
    			'country' => 'us',
    			'logoUrl' => 'http://logo.clearbit.com/www.breitbart.com'
    		),

    		array(
    			'source_id' => 'business-insider',
    			'name' => 'Business Insider',
    			'description' => 'Business Insider is a fast-growing business site with deep financial, media, tech, and other industry verticals. Launched in 2007, the site is now the largest business news site on the web.',
    			'url' => 'http://www.businessinsider.com',
    			'category' => 'business',
    			'language' => 'en',
    			'country' => 'us',
    			'logoUrl' => 'http://logo.clearbit.com/www.businessinsider.com'
    		),

    		array(
    			'source_id' => 'business-insider-uk',
    			'name' => 'Business Insider (UK)',
    			'description' => 'Business Insider is a fast-growing business site with deep financial, media, tech, and other industry verticals. Launched in 2007, the site is now the largest business news site on the web.',
    			'url' => 'http://uk.businessinsider.com',
    			'category' => 'business',
    			'language' => 'en',
    			'country' => 'gb',
    			'logoUrl' => 'http://logo.clearbit.com/www.businessinsider.com'
    		),

    		array(
    			'source_id' => 'buzzfeed',
    			'name' => 'Buzzfeed',
    			'description' => 'BuzzFeed is a cross-platform, global network for news and entertainment that generates seven billion views each month.',
    			'url' => 'https://www.buzzfeed.com',
    			'category' => 'entertainment',
    			'language' => 'en',
    			'country' => 'us',
    			'logoUrl' => 'http://logo.clearbit.com/www.buzzfeed.com'
    		),

    		array(
    			'source_id' => 'cnbc',
    			'name' => 'CNBC',
    			'description' => 'Get latest business news on stock markets, financial & earnings on CNBC. View world markets streaming charts & video; check stock tickers and quotes.',
    			'url' => 'http://www.cnbc.com',
    			'category' => 'business',
    			'language' => 'en',
    			'country' => 'us',
    			'logoUrl' => 'http://logo.clearbit.com/www.cnbc.com'
    		),

    		array(
    			'source_id' => 'cnn',
    			'name' => 'CNN',
    			'description' => 'View the latest news and breaking news today for U.S., world, weather, entertainment, politics and health at CNN',
    			'url' => 'http://us.cnn.com',
    			'category' => 'general',
    			'language' => 'en',
    			'country' => 'us',
    			'logoUrl' => 'http://logo.clearbit.com/us.cnn.com'
    		),

    		array(
    			'source_id' => 'daily-mail',
    			'name' => 'Daily Mail',
    			'description' => 'All the latest news, sport, showbiz, science and health stories from around the world from the Daily Mail and Mail on Sunday newspapers.',
    			'url' => 'http://www.dailymail.co.uk/home/index.html',
    			'category' => 'entertainment',
    			'language' => 'en',
    			'country' => 'gb',
    			'logoUrl' => 'http://logo.clearbit.com/www.dailymail.co.uk'
    		),

    		array(
    			'source_id' => 'der-tagesspiegel',
    			'name' => 'Der Tagesspiegel',
    			'description' => 'Nachrichten, News und neueste Meldungen aus dem Inland und dem Ausland - aktuell präsentiert von tagesspiegel.de.',
    			'url' => 'http://www.tagesspiegel.de',
    			'category' => 'general',
    			'language' => 'de',
    			'country' => 'de',
    			'logoUrl' => 'http://logo.clearbit.com/www.tagesspiegel.de'
    		),

    		array(
    			'source_id' => 'die-zeit',
    			'name' => 'Die Zeit',
    			'description' => 'Aktuelle Nachrichten, Kommentare, Analysen und Hintergrundberichte aus Politik, Wirtschaft, Gesellschaft, Wissen, Kultur und Sport lesen Sie auf ZEIT ONLINE.',
    			'url' => 'http://www.zeit.de/index',
    			'category' => 'business',
    			'language' => 'de',
    			'country' => 'de',
    			'logoUrl' => 'http://logo.clearbit.com/www.zeit.de'
    		),

    		array(
    			'source_id' => 'engadget',
    			'name' => 'Engadget',
    			'description' => 'Engadget is a web magazine with obsessive daily coverage of everything new in gadgets and consumer electronics.',
    			'url' => 'https://www.engadget.com',
    			'category' => 'technology',
    			'language' => 'en',
    			'country' => 'us',
    			'logoUrl' => 'http://logo.clearbit.com/www.engadget.com'
    		),

    		array(
    			'source_id' => 'entertainment-weekly',
    			'name' => 'Entertainment Weekly',
    			'description' => 'Online version of the print magazine includes entertainment news, interviews, reviews of music, film, TV and books, and a special area for magazine subscribers.',
    			'url' => 'http://www.ew.com',
    			'category' => 'entertainment',
    			'language' => 'en',
    			'country' => 'us',
    			'logoUrl' => 'http://logo.clearbit.com/www.ew.com'
    		),

    		array(
    			'source_id' => 'espn',
    			'name' => 'ESPN',
    			'description' => 'ESPN has up-to-the-minute sports news coverage, scores, highlights and commentary for NFL, MLB, NBA, College Football, NCAA Basketball and more.',
    			'url' => 'http://espn.go.com',
    			'category' => 'sport',
    			'language' => 'en',
    			'country' => 'us',
    			'logoUrl' => 'http://logo.clearbit.com/espn.go.com'
    		),

    		array(
    			'source_id' => 'espn-cric-info',
    			'name' => 'ESPN Cric Info',
    			'description' => 'ESPN Cricinfo provides the most comprehensive cricket coverage available including live ball-by-ball commentary, news, unparalleled statistics, quality editorial comment and analysis.',
    			'url' => 'http://www.espncricinfo.com/',
    			'category' => 'sport',
    			'language' => 'en',
    			'country' => 'us',
    			'logoUrl' => 'http://logo.clearbit.com/www.espncricinfo.com'
    		),

    		array(
    			'source_id' => 'financial-times',
    			'name' => 'Financial Times',
    			'description' => 'The latest UK and international business, finance, economic and political news, comment and analysis from the Financial Times on FT.com.',
    			'url' => 'http://www.ft.com/home/uk',
    			'category' => 'business',
    			'language' => 'en',
    			'country' => 'gb',
    			'logoUrl' => 'http://logo.clearbit.com/www.ft.com'
    		),

    		array(
    			'source_id' => 'focus',
    			'name' => 'Focus',
    			'description' => 'Minutenaktuelle Nachrichten und Service-Informationen von Deutschlands modernem Nachrichtenmagazin.',
    			'url' => 'http://www.focus.de',
    			'category' => 'general',
    			'language' => 'de',
    			'country' => 'de',
    			'logoUrl' => 'http://logo.clearbit.com/www.focus.de'
    		),

    		array(
    			'source_id' => 'football-italia',
    			'name' => 'Football Italia',
    			'description' => 'Italian football news, analysis, fixtures and results for the latest from Serie A, Serie B and the Azzurri.',
    			'url' => 'http://www.football-italia.net',
    			'category' => 'sport',
    			'language' => 'en',
    			'country' => 'it',
    			'logoUrl' => 'http://logo.clearbit.com/www.football-italia.net'
    		),

    		array(
    			'source_id' => 'fortune',
    			'name' => 'Fortune',
    			'description' => 'Fortune 500 Daily and Breaking Business News.',
    			'url' => 'http://fortune.com',
    			'category' => 'business',
    			'language' => 'en',
    			'country' => 'us',
    			'logoUrl' => 'http://logo.clearbit.com/fortune.com'
    		),

    		array(
    			'source_id' => 'four-four-two',
    			'name' => 'FourFourTwo',
    			'description' => 'The latest football news, in-depth features, tactical and statistical analysis from FourFourTwo, the UK&#039;s favourite football monthly.',
    			'url' => 'http://www.fourfourtwo.com/news',
    			'category' => 'sport',
    			'language' => 'en',
    			'country' => 'gb',
    			'logoUrl' => 'http://logo.clearbit.com/www.fourfourtwo.com'
    		),

    		array(
    			'source_id' => 'fox-sports',
    			'name' => 'Fox Sports',
    			'description' => 'Find live scores, player and team news, videos, rumors, stats, standings, schedules and fantasy games on FOX Sports.',
    			'url' => 'http://www.foxsports.com',
    			'category' => 'sport',
    			'language' => 'en',
    			'country' => 'us',
    			'logoUrl' => 'http://logo.clearbit.com/www.foxsports.com'
    		),

    		array(
    			'source_id' => 'financial-times',
    			'name' => 'Financial Times',
    			'description' => 'The latest UK and international business, finance, economic and political news, comment and analysis from the Financial Times on FT.com.',
    			'url' => 'http://www.ft.com/home/uk',
    			'category' => 'business',
    			'language' => 'en',
    			'country' => 'gb',
    			'logoUrl' => 'http://logo.clearbit.com/www.ft.com'
    		),

    		array(
    			'source_id' => 'google-news',
    			'name' => 'Google News',
    			'description' => 'Comprehensive, up-to-date news coverage, aggregated from sources all over the world by Google News.',
    			'url' => 'https://news.google.co.uk',
    			'category' => 'general',
    			'language' => 'en',
    			'country' => 'us',
    			'logoUrl' => 'http://logo.clearbit.com/news.google.co.uk'
    		),

    		array(
    			'source_id' => 'gruenderszene',
    			'name' => 'Gruenderszene',
    			'description' => 'Online-Magazin für Startups und die digitale Wirtschaft. News und Hintergründe zu Investment, VC und Gründungen.',
    			'url' => 'http://www.gruenderszene.de',
    			'category' => 'technology',
    			'language' => 'de',
    			'country' => 'de',
    			'logoUrl' => 'http://logo.clearbit.com/www.gruenderszene.de'
    		),

    		array(
    			'source_id' => 'hacker-news',
    			'name' => 'Hacker News',
    			'description' => 'Hacker News is a social news website focusing on computer science and entrepreneurship. It is run by Paul Graham\'s investment fund and startup incubator, Y Combinator. In general, content that can be submitted is defined as \"anything that gratifies one\'s intellectual curiosity/".',
    			'url' => 'https://news.ycombinator.com',
    			'category' => 'technology',
    			'language' => 'en',
    			'country' => 'us',
    			'logoUrl' => 'http://logo.clearbit.com/news.ycombinator.com'
    		),

    		array(
    			'source_id' => 'handelsblatt',
    			'name' => 'Handelsblatt',
    			'description' => 'Auf Handelsblatt lesen sie Nachrichten über Unternehmen, Finanzen, Politik und Technik. Verwalten Sie Ihre Finanzanlagen mit Hilfe unserer Börsenkurse.',
    			'url' => 'http://www.handelsblatt.com',
    			'category' => 'business',
    			'language' => 'de',
    			'country' => 'de',
    			'logoUrl' => 'http://logo.clearbit.com/www.handelsblatt.com'
    		),

    		array(
    			'source_id' => 'ign',
    			'name' => 'IGN',
    			'description' => 'IGN is your site for Xbox One, PS4, PC, Wii-U, Xbox 360, PS3, Wii, 3DS, PS Vita and iPhone games with expert reviews, news, previews, trailers, cheat codes, wiki guides and walkthroughs.',
    			'url' => 'http://www.ign.com',
    			'category' => 'gaming',
    			'language' => 'en',
    			'country' => 'us',
    			'logoUrl' => 'http://logo.clearbit.com/www.ign.com'
    		),

    		array(
    			'source_id' => 'independent',
    			'name' => 'Independent',
    			'description' => 'National morning quality (tabloid) includes free online access to news and supplements. Insight by Robert Fisk and various other columnists.',
    			'url' => 'http://www.independent.co.uk',
    			'category' => 'general',
    			'language' => 'en',
    			'country' => 'gb',
    			'logoUrl' => 'http://logo.clearbit.com/www.independent.co.uk'
    		),

    		array(
    			'source_id' => 'mashable',
    			'name' => 'Mashable',
    			'description' => 'Mashable is a global, multi-platform media and entertainment company.',
    			'url' => 'http://mashable.com',
    			'category' => 'entertainment',
    			'language' => 'en',
    			'country' => 'us',
    			'logoUrl' => 'http://logo.clearbit.com/mashable.com'
    		),

    		array(
    			'source_id' => 'hacker-news',
    			'name' => 'Hacker News',
    			'description' => 'Hacker News is a social news website focusing on computer science and entrepreneurship. It is run by Paul Graham\'s investment fund and startup incubator, Y Combinator. In general, content that can be submitted is defined as \"anything that gratifies one\'s intellectual curiosity/".',
    			'url' => 'https://news.ycombinator.com',
    			'category' => 'technology',
    			'language' => 'en',
    			'country' => 'us',
    			'logoUrl' => 'http://logo.clearbit.com/news.ycombinator.com'
    		),

    		array(
    			'source_id' => 'metro',
    			'name' => 'Metro',
    			'description' => 'News, Sport, Showbiz, Celebrities from Metro - a free British newspaper.',
    			'url' => 'http://metro.co.uk',
    			'category' => 'general',
    			'language' => 'en',
    			'country' => 'gb',
    			'logoUrl' => 'http://logo.clearbit.com/metro.co.uk'
    		),

    		array(
    			'source_id' => 'mirror',
    			'name' => 'Mirror',
    			'description' => 'All the latest news, sport and celebrity gossip at Mirror.co.uk. Get all the big headlines, pictures, analysis, opinion and video on the stories that matter to you.',
    			'url' => 'http://www.mirror.co.uk/',
    			'category' => 'general',
    			'language' => 'en',
    			'country' => 'gb',
    			'logoUrl' => 'http://logo.clearbit.com/www.mirror.co.uk'
    		),

    		array(
    			'source_id' => 'mtv-news',
    			'name' => 'MTV News',
    			'description' => 'The ultimate news source for music, celebrity, entertainment, movies, and current events on the web. It\'s pop culture on steroids.',
    			'url' => 'http://www.mtv.com/news',
    			'category' => 'music',
    			'language' => 'en',
    			'country' => 'us',
    			'logoUrl' => 'http://logo.clearbit.com/www.mtv.co.uk'
    		),

    		array(
    			'source_id' => 'mtv-news-uk',
    			'name' => 'MTV News (UK)',
    			'description' => 'All the latest celebrity news, gossip, exclusive interviews and pictures from the world of music and entertainment.',
    			'url' => 'http://www.mtv.co.uk/news',
    			'category' => 'music',
    			'language' => 'en',
    			'country' => 'gb',
    			'logoUrl' => 'http://logo.clearbit.com/www.mtv.co.uk'
    		),

    		array(
    			'source_id' => 'national-geographic',
    			'name' => 'National Geographic',
    			'description' => 'Reporting our world daily: original nature and science news from National Geographic.',
    			'url' => 'http://news.nationalgeographic.com',
    			'category' => 'science-and-nature',
    			'language' => 'en',
    			'country' => 'us',
    			'logoUrl' => 'http://logo.clearbit.com/news.nationalgeographic.com'
    		),

    		array(
    			'source_id' => 'new-scientist',
    			'name' => 'New Scientist',
    			'description' => 'Breaking science and technology news from around the world. Exclusive stories and expert analysis on space, technology, health, physics, life and Earth.',
    			'url' => 'https://www.newscientist.com/section/news',
    			'category' => 'science-and-nature',
    			'language' => 'en',
    			'country' => 'us',
    			'logoUrl' => 'http://logo.clearbit.com/www.newscientist.com'
    		),

    		array(
    			'source_id' => 'newsweek',
    			'name' => 'Newsweek',
    			'description' => 'Newsweek provides in-depth analysis, news and opinion about international issues, technology, business, culture and politics.',
    			'url' => 'http://www.newsweek.com',
    			'category' => 'general',
    			'language' => 'en',
    			'country' => 'us',
    			'logoUrl' => 'http://logo.clearbit.com/www.newsweek.com'
    		),

    		array(
    			'source_id' => 'new-york-magazine',
    			'name' => 'New York Magazine',
    			'description' => 'NYMAG and New York magazine cover the new, the undiscovered, the next in politics, culture, food, fashion, and behavior nationally, through a New York lens.',
    			'url' => 'http://nymag.com',
    			'category' => 'general',
    			'language' => 'en',
    			'country' => 'us',
    			'logoUrl' => 'http://logo.clearbit.com/nymag.com'
    		),

    		array(
    			'source_id' => 'nfl-news',
    			'name' => 'NFL News',
    			'description' => 'The official source for NFL news, schedules, stats, scores and more.',
    			'url' => 'http://www.nfl.com/news',
    			'category' => 'sport',
    			'language' => 'en',
    			'country' => 'us',
    			'logoUrl' => 'http://logo.clearbit.com/www.nfl.com'
    		),

    		array(
    			'source_id' => 'polygon',
    			'name' => 'Polygon',
    			'description' => 'Polygon is a gaming website in partnership with Vox Media. Our culture focused site covers games, their creators, the fans, trending stories and entertainment news.',
    			'url' => 'http://www.polygon.com',
    			'category' => 'gaming',
    			'language' => 'en',
    			'country' => 'us',
    			'logoUrl' => 'http://logo.clearbit.com/www.polygon.com'
    		),

    		array(
    			'source_id' => 'recode',
    			'name' => 'Recode',
    			'description' => 'Get the latest independent tech news, reviews and analysis from Recode with the most informed and respected journalists in technology and media.',
    			'url' => 'http://www.recode.net',
    			'category' => 'technology',
    			'language' => 'en',
    			'country' => 'us',
    			'logoUrl' => 'http://logo.clearbit.com/www.recode.net'
    		),

    		array(
    			'source_id' => 'reddit-r-all',
    			'name' => 'Reddit /r/all',
    			'description' => 'Reddit is an entertainment, social news networking service, and news website. Reddit\'s registered community members can submit content, such as text posts or direct links.',
    			'url' => 'https://www.reddit.com/r/all',
    			'category' => 'general',
    			'language' => 'en',
    			'country' => 'us',
    			'logoUrl' => 'http://logo.clearbit.com/www.reddit.com'
    		),

    		array(
    			'source_id' => 'reuters',
    			'name' => 'Reuters',
    			'description' => 'Reuters.com brings you the latest news from around the world, covering breaking news in business, politics, entertainment, technology, video and pictures.',
    			'url' => 'http://www.reuters.com',
    			'category' => 'general',
    			'language' => 'en',
    			'country' => 'us',
    			'logoUrl' => 'http://logo.clearbit.com/www.reuters.com'
    		),

    		array(
    			'source_id' => 'spiegel-online',
    			'name' => 'Spiegel Online',
    			'description' => 'Deutschlands führende Nachrichtenseite. Alles Wichtige aus Politik, Wirtschaft, Sport, Kultur, Wissenschaft, Technik und mehr.',
    			'url' => 'http://www.spiegel.de',
    			'category' => 'general',
    			'language' => 'de',
    			'country' => 'de',
    			'logoUrl' => 'http://logo.clearbit.com/www.spiegel.de'
    		),

    		array(
    			'source_id' => 't3n',
    			'name' => 'T3n',
    			'description' => 'Das Online-Magazin bietet Artikel zu den Themen E-Business, Social Media, Startups und Webdesign.',
    			'url' => 'http://t3n.de',
    			'category' => 'technology',
    			'language' => 'de',
    			'country' => 'de',
    			'logoUrl' => 'http://logo.clearbit.com/t3n.de'
    		),

    		array(
    			'source_id' => 'talksport',
    			'name' => 'TalkSport',
    			'description' => 'Tune in to the world\'s biggest sports radio station - Live Premier League football coverage, breaking sports news, transfer rumours &amp; exclusive interviews.',
    			'url' => 'http://talksport.com',
    			'category' => 'sport',
    			'language' => 'en',
    			'country' => 'gb',
    			'logoUrl' => 'http://logo.clearbit.com/talksport.com'
    		),

    		array(
    			'source_id' => 'techcrunch',
    			'name' => 'TechCrunch',
    			'description' => 'TechCrunch is a leading technology media property, dedicated to obsessively profiling startups, reviewing new Internet products, and breaking tech news.',
    			'url' => 'https://techcrunch.com',
    			'category' => 'technology',
    			'language' => 'en',
    			'country' => 'us',
    			'logoUrl' => 'http://logo.clearbit.com/techcrunch.com'
    		),

    		array(
    			'source_id' => 'techradar',
    			'name' => 'TechRadar',
    			'description' => 'The latest technology news and reviews, covering computing, home entertainment systems, gadgets and more.',
    			'url' => 'http://www.techradar.com',
    			'category' => 'technology',
    			'language' => 'en',
    			'country' => 'us',
    			'logoUrl' => 'http://logo.clearbit.com/www.techradar.com'
    		),

    		array(
    			'source_id' => 'the-economist',
    			'name' => 'The Economist',
    			'description' => 'The Economist offers authoritative insight and opinion on international news, politics, business, finance, science, technology and the connections between them.',
    			'url' => 'http://www.economist.com',
    			'category' => 'business',
    			'language' => 'en',
    			'country' => 'gb',
    			'logoUrl' => 'http://logo.clearbit.com/www.economist.com'
    		),

    		array(
    			'source_id' => 'the-guardian-au',
    			'name' => 'The Guardian (AU)',
    			'description' => 'Latest news, sport, comment, analysis and reviews from Guardian Australia',
    			'url' => 'https://www.theguardian.com/au',
    			'category' => 'general',
    			'language' => 'en',
    			'country' => 'au',
    			'logoUrl' => 'http://logo.clearbit.com/www.theguardian.com'
    		),

    		array(
    			'source_id' => 'the-guardian-uk',
    			'name' => 'The Guardian (UK)',
    			'description' => 'Latest news, sport, business, comment, analysis and reviews from the Guardian, the world\'s leading liberal voice.',
    			'url' => 'https://www.theguardian.com/uk',
    			'category' => 'general',
    			'language' => 'en',
    			'country' => 'gb',
    			'logoUrl' => 'http://logo.clearbit.com/www.theguardian.com'
    		),

    		array(
    			'source_id' => 'the-hindu',
    			'name' => 'The Hindu',
    			'description' => 'The Hindu. latest news, analysis, comment, in-depth coverage of politics, business, sport, environment, cinema and arts from India\'s national newspaper.',
    			'url' => 'http://www.thehindu.com',
    			'category' => 'general',
    			'language' => 'en',
    			'country' => 'in',
    			'logoUrl' => 'http://logo.clearbit.com/www.thehindu.com'
    		),

    		array(
    			'source_id' => 'the-huffington-post',
    			'name' => 'The Huffington Post',
    			'description' => 'The Huffington Post is a politically liberal American online news aggregator and blog that has both localized and international editions founded by Arianna Huffington, Kenneth Lerer, Andrew Breitbart, and Jonah Peretti, featuring columnists.',
    			'url' => 'http://www.huffingtonpost.com',
    			'category' => 'general',
    			'language' => 'en',
    			'country' => 'us',
    			'logoUrl' => 'http://logo.clearbit.com/www.huffingtonpost.com'
    		),

    		array(
    			'source_id' => 'the-lad-bible',
    			'name' => 'The Lad Bible',
    			'description' => 'The LAD Bible is one of the largest community for guys aged 16-30 in the world. Send us your funniest pictures and videos!',
    			'url' => 'http://www.theladbible.com',
    			'category' => 'entertainment',
    			'language' => 'en',
    			'country' => 'gb',
    			'logoUrl' => 'http://logo.clearbit.com/www.theladbible.com'
    		),

    		array(
    			'source_id' => 'the-new-york-times',
    			'name' => 'The New York Times',
    			'description' => 'The New York Times: Find breaking news, multimedia, reviews & opinion on Washington, business, sports, movies, travel, books, jobs, education, real estate, cars & more at nytimes.com.',
    			'url' => 'http://www.nytimes.com',
    			'category' => 'general',
    			'language' => 'en',
    			'country' => 'us',
    			'logoUrl' => 'http://logo.clearbit.com/www.nytimes.com'
    		),

    		array(
    			'source_id' => 'the-next-web',
    			'name' => 'the-next-web',
    			'description' => 'The Next Web is one of the world’s largest online publications that delivers an international perspective on the latest news about Internet technology, business and culture.',
    			'url' => 'http://thenextweb.com',
    			'category' => 'technology',
    			'language' => 'en',
    			'country' => 'us',
    			'logoUrl' => 'http://logo.clearbit.com/thenextweb.com'
    		),

    		array(
    			'source_id' => 'the-sport-bible',
    			'name' => 'The Sport Bible',
    			'description' => 'TheSPORTbible is one of the largest communities for sports fans across the world. Send us your sporting pictures and videos!',
    			'url' => 'TheSPORTbible is one of the largest communities for sports fans across the world. Send us your sporting pictures and videos!',
    			'category' => 'sport',
    			'language' => 'en',
    			'country' => 'gb',
    			'logoUrl' => 'http://logo.clearbit.com/www.thesportbible.com'
    		),

    		array(
    			'source_id' => 'the-telegraph',
    			'name' => 'The Telegraph',
    			'description' => 'Latest news, business, sport, comment, lifestyle and culture from the Daily Telegraph and Sunday Telegraph newspapers and video from Telegraph TV.',
    			'url' => 'http://www.telegraph.co.uk',
    			'category' => 'general',
    			'language' => 'en',
    			'country' => 'gb',
    			'logoUrl' => 'http://logo.clearbit.com/www.telegraph.co.uk'
    		),

    		array(
    			'source_id' => 'the-times-of-india',
    			'name' => 'The Times of India',
    			'description' => 'Times of India brings the Latest News and Top Breaking headlines on Politics and Current Affairs in India and around the World, Sports, Business, Bollywood News and Entertainment, Science, Technology, Health and Fitness news, Cricket and opinions from leading columnists.',
    			'url' => 'http://timesofindia.indiatimes.com',
    			'category' => 'general',
    			'language' => 'en',
    			'country' => 'in',
    			'logoUrl' => 'http://logo.clearbit.com/timesofindia.indiatimes.com'
    		),

    		array(
    			'source_id' => 'the-verge',
    			'name' => 'The Verge',
    			'description' => 'The Verge covers the intersection of technology, science, art, and culture.',
    			'url' => 'http://www.theverge.com',
    			'category' => 'technology',
    			'language' => 'en',
    			'country' => 'us',
    			'logoUrl' => 'http://logo.clearbit.com/www.theverge.com'
    		),

    		array(
    			'source_id' => 'the-wall-street-journal',
    			'name' => 'The Wall Street Journal',
    			'description' => 'WSJ online coverage of breaking news and current headlines from the US and around the world. Top stories, photos, videos, detailed analysis and in-depth reporting.',
    			'url' => 'http://www.wsj.com',
    			'category' => 'business',
    			'language' => 'en',
    			'country' => 'us',
    			'logoUrl' => 'http://logo.clearbit.com/www.wsj.com'
    		),

    		array(
    			'source_id' => 'the-washington-post',
    			'name' => 'The Washington Post',
    			'description' => 'Breaking news and analysis on politics, business, world national news, entertainment more. In-depth DC, Virginia, Maryland news coverage including traffic, weather, crime, education, restaurant reviews and more.',
    			'url' => 'https://www.washingtonpost.com',
    			'category' => 'general',
    			'language' => 'en',
    			'country' => 'us',
    			'logoUrl' => 'http://logo.clearbit.com/www.washingtonpost.com'
    		),

    		array(
    			'source_id' => 'time',
    			'name' => 'Time',
    			'description' => 'Breaking news and analysis from TIME.com. Politics, world news, photos, video, tech reviews, health, science and entertainment news.',
    			'url' => 'http://time.com',
    			'category' => 'general',
    			'language' => 'en',
    			'country' => 'us',
    			'logoUrl' => 'http://logo.clearbit.com/time.com'
    		),

    		array(
    			'source_id' => 'usa-today',
    			'name' => 'USA Today',
    			'description' => 'Get the latest national, international, and political news at USATODAY.com.',
    			'url' => 'http://www.usatoday.com/news',
    			'category' => 'general',
    			'language' => 'en',
    			'country' => 'us',
    			'logoUrl' => 'http://logo.clearbit.com/www.usatoday.com'
    		),

    		array(
    			'source_id' => 'wired-de',
    			'name' => 'Wired.de',
    			'description' => 'Wired reports on how emerging technologies affect culture, the economy and politics.',
    			'url' => 'https://www.wired.de',
    			'category' => 'technology',
    			'language' => 'de',
    			'country' => 'de',
    			'logoUrl' => 'http://logo.clearbit.com/www.wired.de'
    		),

    		array(
    			'source_id' => 'wirtschafts-woche',
    			'name' => 'Wirtschafts Woche',
    			'description' => 'Das Online-Portal des führenden Wirtschaftsmagazins in Deutschland. Das Entscheidende zu Unternehmen, Finanzen, Erfolg und Technik.',
    			'url' => 'http://www.wiwo.de',
    			'category' => 'business',
    			'language' => 'de',
    			'country' => 'de',
    			'logoUrl' => 'http://logo.clearbit.com/www.wiwo.de'
    		),






    	);

    	DB::table('sources')->insert($sources);
    }
}
