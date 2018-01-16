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
        DB::table('sources')->truncate();

    	$sources = array(
            array(
                'source_id' => 'abc-news',
                'name' => 'ABC News',
                'description' => 'Your trusted source for breaking news, analysis, exclusive interviews, headlines, and videos at ABCNews.com.',
                'url' => 'http://abcnews.go.com',
                'category' => 'general',
                'language' => 'en',
                'country' => 'us',
                'logoUrl' => 'http://logo.clearbit.com/abcnews.go.com'
            ),

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
                'source_id' => 'aftenposten',
                'name' => 'Aftenposten',
                'description' => 'Norges ledende nettavis med alltid oppdaterte nyheter innenfor innenriks, utenriks, sport og kultur.',
                'url' => 'https://www.aftenposten.no',
                'category' => 'general',
                'country' => 'no',
                'language' => 'no',
                'logoUrl' => 'http://logo.clearbit.com/www.aftenposten.no'
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
                'source_id' => 'ansa',
                'name' => 'ANSA.it',
                'description' => 'Agenzia ANSA: ultime notizie, foto, video e approfondimenti su: cronaca, politica, economia, regioni, mondo, sport, calcio, cultura e tecnologia.',
                'url' => 'http://www.ansa.it',
                'category' => 'general',
                'country' => 'it',
                'language' => 'it',
                'logoUrl' => 'http://logo.clearbit.com/www.ansa.it'
            ),

            array(
                'source_id' => 'argaam',
                'name' => 'Argaam',
                'description' => 'ارقام موقع متخصص في متابعة سوق الأسهم السعودي تداول - تاسي - مع تغطيه معمقة لشركات واسعار ومنتجات البتروكيماويات , تقارير مالية الاكتتابات الجديده ',
                'url' => 'http://www.argaam.com',
                'category' => 'business',
                'country' => 'ar',
                'language' => 'sa',
                'logoUrl' => 'http://logo.clearbit.com/www.argaam.com'
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
                'source_id' => 'ary-news',
                'name' => 'Ary News',
                'description' => 'ARY News is a Pakistani news channel committed to bring you up-to-the minute Pakistan news and featured stories from around Pakistan and all over the world.',
                'url' => 'https://arynews.tv/ud/',
                'category' => 'general',
                'language' => 'ud',
                'country' => 'pk',
                'logoUrl' => 'http://logo.clearbit.com/arynews.tv/ud/'
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
                'source_id' => 'australian-financial-review',
                'name' => 'Australian Financial Review',
                'description' => 'The Australian Financial Review reports the latest news from business, finance, investment and politics, updated in real time. It has a reputation for independent, award-winning journalism and is essential reading for the business and investor community.',
                'url' => 'http://www.afr.com',
                'category' => 'business',
                'language' => 'en',
                'country' => 'au',
                'logoUrl' => 'http://logo.clearbit.com/www.afr.com'
            ),

            array(
                'source_id' => 'axios',
                'name' => 'Axios',
                'description' => 'Axios are a new media company delivering vital, trustworthy news and analysis in the most efficient, illuminating and shareable ways possible.',
                'url' => 'https://www.axios.com',
                'category' => 'general',
                'language' => 'en',
                'country' => 'us',
                'logoUrl' => 'http://logo.clearbit.com/www.axios.com'
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
    			'category' => 'sports',
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
                'source_id' => 'blasting-news-br',
                'name' => 'Blasting News (BR)',
                'description' => 'Descubra a seção brasileira da Blasting News, a primeira revista feita pelo  público, com notícias globais e vídeos independentes. Junte-se a nós e torne- se um repórter.',
                'url' => 'http://br.blastingnews.com',
                'category' => 'general',
                'language' => 'pt',
                'country' => 'br',
                'logoUrl' => 'http://logo.clearbit.com/br.blastingnews.com'
            ),

            array(
                'source_id' => 'bleacher-report',
                'name' => 'Bleacher Report',
                'description' => 'Sports journalists and bloggers covering NFL, MLB, NBA, NHL, MMA, college football and basketball, NASCAR, fantasy sports and more. News, photos, mock drafts, game scores, player profiles and more!',
                'url' => 'http://www.bleacherreport.com',
                'category' => 'sports',
                'language' => 'en',
                'country' => 'us',
                'logoUrl' => 'http://logo.clearbit.com/www.bleacherreport.com'
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
                'source_id' => 'cbc-news',
                'name' => 'CBC News',
                'description' => 'CBC News is the division of the Canadian Broadcasting Corporation responsible for the news gathering and production of news programs on the corporation\'s English-language operations, namely CBC Television, CBC Radio, CBC News Network, and CBC.ca.',
                'url' => 'http://www.cbc.ca/news',
                'category' => 'general',
                'language' => 'en',
                'country' => 'ca',
                'logoUrl' => 'http://logo.clearbit.com/www.cbc.ca/news'
            ),

            array(
                'source_id' => 'cbc-news',
                'name' => 'CBC News',
                'description' => 'CBS News: dedicated to providing the best in journalism under standards it pioneered at the dawn of radio and television and continue in the digital age.',
                'url' => 'http://www.cbsnews.com',
                'category' => 'general',
                'language' => 'en',
                'country' => 'us',
                'logoUrl' => 'http://logo.clearbit.com/www.cbsnews.com'
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
                'source_id' => 'cnn-es',
                'name' => 'CNN Spanish',
                'description' => 'Lee las últimas noticias e información sobre Latinoamérica, Estados Unidos, mundo, entretenimiento, política, salud, tecnología y deportes en CNNEspañol.com.',
                'url' => 'http://cnnespanol.cnn.com/',
                'category' => 'general',
                'language' => 'en',
                'country' => 'us',
                'logoUrl' => 'http://logo.clearbit.com/cnnespanol.cnn.com/'
            ),

            array(
                'source_id' => 'crypto-coins-news',
                'name' => 'Crypto Coins News',
                'description' => 'Providing breaking cryptocurrency news - focusing on Bitcoin, Ethereum, ICOs, blockchain technology, and smart contracts.',
                'url' => 'https://www.ccn.com',
                'category' => 'technology',
                'language' => 'en',
                'country' => 'us',
                'logoUrl' => 'http://logo.clearbit.com/www.ccn.com'
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
                'source_id' => 'el-mundo',
                'name' => 'El Mundo',
                'description' => 'Noticias, actualidad, álbumes, debates, sociedad, servicios, entretenimiento y última hora en España y el mundo.',
                'url' => 'http://www.elmundo.es',
                'category' => 'general',
                'language' => 'es',
                'country' => 'es',
                'logoUrl' => 'http://logo.clearbit.com/www.elmundo.es'
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
    			'category' => 'sports',
    			'language' => 'en',
    			'country' => 'us',
    			'logoUrl' => 'https://www.brandsoftheworld.com/sites/default/files/styles/logo-thumbnail/public/052016/untitled-1_242.png?itok=vy3l2HxD'
    		),

    		array(
    			'source_id' => 'espn-cric-info',
    			'name' => 'ESPN Cric Info',
    			'description' => 'ESPN Cricinfo provides the most comprehensive cricket coverage available including live ball-by-ball commentary, news, unparalleled statistics, quality editorial comment and analysis.',
    			'url' => 'http://www.espncricinfo.com/',
    			'category' => 'sports',
    			'language' => 'en',
    			'country' => 'us',
    			'logoUrl' => 'http://logo.clearbit.com/www.espncricinfo.com'
    		),

            array(
                'source_id' => 'financial-post',
                'name' => 'Financial Post',
                'description' => 'Find the latest happenings in the Canadian Financial Sector and stay up to date with changing trends in Business Markets. Read trading and investing advice from professionals.',
                'url' => 'http://business.financialpost.com',
                'category' => 'business',
                'language' => 'en',
                'country' => 'ca',
                'logoUrl' => 'http://logo.clearbit.com/business.financialpost.com'
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
    			'category' => 'sports',
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
    			'category' => 'sports',
    			'language' => 'en',
    			'country' => 'gb',
    			'logoUrl' => 'http://logo.clearbit.com/www.fourfourtwo.com'
    		),

            array(
                'source_id' => 'fox-news',
                'name' => 'Fox News',
                'description' => 'Breaking News, Latest News and Current News from FOXNews.com. Breaking news and video. Latest Current News: U.S., World, Entertainment, Health, Business, Technology, Politics, Sports.',
                'url' => 'http://www.foxnews.com',
                'category' => 'general',
                'language' => 'en',
                'country' => 'us',
                'logoUrl' => 'http://logo.clearbit.com/www.foxnews.com'
            ),

    		array(
    			'source_id' => 'fox-sports',
    			'name' => 'Fox Sports',
    			'description' => 'Find live scores, player and team news, videos, rumors, stats, standings, schedules and fantasy games on FOX Sports.',
    			'url' => 'http://www.foxsports.com',
    			'category' => 'sports',
    			'language' => 'en',
    			'country' => 'us',
    			'logoUrl' => 'http://logo.clearbit.com/www.foxsports.com'
    		),

            array(
                'source_id' => 'globo',
                'name' => 'Globo',
                'description' => 'Só na globo.com você encontra tudo sobre o conteúdo e marcas do Grupo Globo. O melhor acervo de vídeos online sobre entretenimento, esportes e jornalismo do Brasil.',
                'url' => 'http://www.globo.com/',
                'category' => 'general',
                'language' => 'pt',
                'country' => 'br',
                'logoUrl' => 'http://logo.clearbit.com/www.globo.com/'
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
                'source_id' => 'google-news-ar',
                'name' => 'Google News (Argentina)',
                'description' => 'Completa cobertura actualizada de noticias agregadas a partir de fuentes de todo el mundo por Google Noticias.',
                'url' => 'https://news.google.com',
                'category' => 'general',
                'language' => 'es',
                'country' => 'ar',
                'logoUrl' => 'http://logo.clearbit.com/news.google.com'
            ),

            array(
                'source_id' => 'google-news-au',
                'name' => 'Google News (Australia)',
                'description' => 'Comprehensive, up-to-date Australia news coverage, aggregated from sources all over the world by Google News.',
                'url' => 'https://news.google.com',
                'category' => 'general',
                'language' => 'es',
                'country' => 'au',
                'logoUrl' => 'http://logo.clearbit.com/news.google.com'
            ),

            array(
                'source_id' => 'google-news-br',
                'name' => 'Google News (Brasil)',
                'description' => 'Cobertura jornalística abrangente e atualizada, agregada de fontes do mundo inteiro pelo Google Notícias.',
                'url' => 'https://news.google.com',
                'category' => 'general',
                'language' => 'pt',
                'country' => 'br',
                'logoUrl' => 'http://logo.clearbit.com/news.google.com'
            ),

            array(
                'source_id' => 'google-news-ca',
                'name' => 'Google News (Canada)',
                'description' => 'Comprehensive, up-to-date Canada news coverage, aggregated from sources all over the world by Google News.',
                'url' => 'https://news.google.com',
                'category' => 'general',
                'language' => 'en',
                'country' => 'ca',
                'logoUrl' => 'http://logo.clearbit.com/news.google.com'
            ),

            array(
                'source_id' => 'google-news-fr',
                'name' => 'Google News (France)',
                'description' => 'Informations complètes et à jour, compilées par Google Actualités à partir de sources d&#39;actualités du monde entier.',
                'url' => 'https://news.google.com',
                'category' => 'general',
                'language' => 'fr',
                'country' => 'fr',
                'logoUrl' => 'http://logo.clearbit.com/news.google.com'
            ),

            array(
                'source_id' => 'google-news-in',
                'name' => 'Google News (India)',
                'description' => 'Comprehensive, up-to-date India news coverage, aggregated from sources all over the world by Google News.',
                'url' => 'https://news.google.com',
                'category' => 'general',
                'language' => 'en',
                'country' => 'in',
                'logoUrl' => 'http://logo.clearbit.com/news.google.com'
            ),

            array(
                'source_id' => 'google-news-is',
                'name' => 'Google News (Israel)',
                'description' => 'כיסוי מקיף ועדכני של חדשות שהצטברו ממקורות בכל העולם על ידי &#39;חדשות Google&#39;.',
                'url' => 'https://news.google.com',
                'category' => 'general',
                'language' => 'he',
                'country' => 'is',
                'logoUrl' => 'http://logo.clearbit.com/news.google.com'
            ),

            array(
                'source_id' => 'google-news-it',
                'name' => 'Google News (Italy)',
                'description' => 'Copertura giornalistica completa e aggiornata ottenuta combinando fonti di notizie in tutto il mondo attraverso Google News.',
                'url' => 'https://news.google.com',
                'category' => 'general',
                'language' => 'it',
                'country' => 'it',
                'logoUrl' => 'http://logo.clearbit.com/news.google.com'
            ),

            array(
                'source_id' => 'google-news-ru',
                'name' => 'Google News (Russia)',
                'description' => 'Исчерпывающая и актуальная информация, собранная службой &quot;Новости Google&quot; со всего света.',
                'url' => 'https://news.google.com',
                'category' => 'general',
                'language' => 'ru',
                'country' => 'ru',
                'logoUrl' => 'http://logo.clearbit.com/news.google.com'
            ),

            array(
                'source_id' => 'google-news-sa',
                'name' => 'Google News (Saudi Arabia)',
                'description' => 'تغطية شاملة ومتجددة للأخبار، تم جمعها من مصادر أخبار من جميع أنحاء العالم بواسطة أخبار Google.',
                'url' => 'https://news.google.com',
                'category' => 'general',
                'language' => 'ar',
                'country' => 'sa',
                'logoUrl' => 'http://logo.clearbit.com/news.google.com'
            ),

            array(
                'source_id' => 'google-news-uk',
                'name' => 'Google News (UK)',
                'description' => 'Comprehensive, up-to-date UK news coverage, aggregated from sources all over the world by Google News.',
                'url' => 'https://news.google.com',
                'category' => 'general',
                'language' => 'en',
                'country' => 'gb',
                'logoUrl' => 'http://logo.clearbit.com/news.google.com'
            ),

            array(
                'source_id' => 'goteborgs-posten',
                'name' => 'Göteborgs-Posten',
                'description' => 'Göteborgs-Posten, abbreviated GP, is a major Swedish language daily newspaper published in Gothenburg, Sweden.',
                'url' => 'http://www.gp.se',
                'category' => 'general',
                'language' => 'se',
                'country' => 'se',
                'logoUrl' => 'http://logo.clearbit.com/www.gp.se'
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
                'source_id' => 'il-sole-24-ore',
                'name' => 'Il Sole 24 Ore',
                'description' => 'Notizie di economia, cronaca italiana ed estera, quotazioni borsa in tempo reale e di finanza, norme e tributi, fondi e obbligazioni, mutui, prestiti e lavoro a cura de Il Sole 24 Ore.',
                'url' => 'http://www.ilsole24ore.com',
                'category' => 'business',
                'language' => 'it',
                'country' => 'it',
                'logoUrl' => 'http://logo.clearbit.com/www.ilsole24ore.com'
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
                'source_id' => 'infobae',
                'name' => 'Infobae',
                'description' => 'Noticias de Argentina y del mundo en tiempo real. Información, videos y fotos sobre los hechos más relevantes y sus protagonistas. Léelo antes en infobae.',
                'url' => 'http://www.infobae.com/?noredirect',
                'category' => 'general',
                'language' => 'es',
                'country' => 'ar',
                'logoUrl' => 'http://logo.clearbit.com/www.infobae.com/?noredirect'
            ),

            array(
                'source_id' => 'info-money',
                'name' => 'InfoMoney',
                'description' => 'No InfoMoney você encontra tudo o que precisa sobre dinheiro. Ações, investimentos, bolsas de valores e muito mais. Aqui você encontra informação que vale dinheiro!',
                'url' => 'http://www.infomoney.com.br',
                'category' => 'business',
                'language' => 'pt',
                'country' => 'br',
                'logoUrl' => 'http://logo.clearbit.com/www.infomoney.com.br'
            ),

            array(
                'source_id' => 'la-gaceta',
                'name' => 'La Gaceta',
                'description' => 'El diario de Tucumán, noticias 24 horas online - San Miguel de Tucumán - Argentina - Ultimo momento - Ultimas noticias.',
                'url' => 'http://www.lagaceta.com.ar',
                'category' => 'general',
                'language' => 'es',
                'country' => 'ar',
                'logoUrl' => 'http://logo.clearbit.com/www.lagaceta.com.ar'
            ),

            array(
                'source_id' => 'la-nacion',
                'name' => 'La Nacion',
                'description' => 'Información confiable en Internet. Noticias de Argentina y del mundo - ¡Informate ya!',
                'url' => 'http://www.lanacion.com.ar',
                'category' => 'general',
                'language' => 'es',
                'country' => 'ar',
                'logoUrl' => 'http://logo.clearbit.com/www.lanacion.com.ar'
            ),

            array(
                'source_id' => 'la-repubblica',
                'name' => 'La Repubblica',
                'description' => 'Breaking News, Latest News and Current News from FOXNews.com. Breaking news and video. Latest Current News: U.S., World, Entertainment, Health, Business, Technology, Politics, Sports.',
                'url' => 'http://www.repubblica.it',
                'category' => 'general',
                'language' => 'it',
                'country' => 'it',
                'logoUrl' => 'http://logo.clearbit.com/www.repubblica.it'
            ),

            array(
                'source_id' => 'le-monde',
                'name' => 'Le Monde',
                'description' => 'Les articles du journal et toute l\'actualit&eacute; en continu : International, France, Soci&eacute;t&eacute;, Economie, Culture, Environnement, Blogs ...',
                'url' => 'http://www.lemonde.fr',
                'category' => 'general',
                'language' => 'fr',
                'country' => 'fr',
                'logoUrl' => 'http://logo.clearbit.com/www.lemonde.fr'
            ),

            array(
                'source_id' => 'lenta',
                'name' => 'Lenta',
                'description' => 'Новости, статьи, фотографии, видео. Семь дней в неделю, 24 часа в сутки.',
                'url' => 'https://lenta.ru',
                'category' => 'general',
                'language' => 'ru',
                'country' => 'ru',
                'logoUrl' => 'http://logo.clearbit.com/lenta.ru'
            ),

            array(
                'source_id' => 'lequipe',
                'name' => 'L\'equipe',
                'description' => 'Le sport en direct sur L\'EQUIPE.fr. Les informations, résultats et classements de tous les sports. Directs commentés, images et vidéos à regarder et à partager !',
                'url' => 'https://www.lequipe.fr',
                'category' => 'sports',
                'language' => 'fr',
                'country' => 'fr',
                'logoUrl' => 'http://logo.clearbit.com/www.lequipe.fr'
            ),

            array(
                'source_id' => 'les-echos',
                'name' => 'Les Echos',
                'description' => 'Toute l\'actualité économique, financière et boursière française et internationale sur Les Echos.fr',
                'url' => 'https://www.lesechos.fr',
                'category' => 'business',
                'language' => 'fr',
                'country' => 'fr',
                'logoUrl' => 'http://logo.clearbit.com/www.lesechos.fr'
            ),

            array(
                'source_id' => 'liberation',
                'name' => 'Libération',
                'description' => 'Toute l\'actualité en direct - photos et vidéos avec Libération',
                'url' => 'http://www.liberation.fr',
                'category' => 'general',
                'language' => 'fr',
                'country' => 'fr',
                'logoUrl' => 'http://logo.clearbit.com/www.liberation.fr'
            ),

            array(
                'source_id' => 'marca',
                'name' => 'Marca',
                'description' => 'La mejor información deportiva en castellano actualizada minuto a minuto en noticias, vídeos, fotos, retransmisiones y resultados en directo.',
                'url' => 'http://www.marca.com',
                'category' => 'sports',
                'language' => 'es',
                'country' => 'es',
                'logoUrl' => 'http://logo.clearbit.com/www.marca.com'
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
                'source_id' => 'medical-news-today',
                'name' => 'Medical News Today',
                'description' => 'Medical news and health news headlines posted throughout the day, every day.',
                'url' => 'http://www.medicalnewstoday.com',
                'category' => 'health',
                'language' => 'en',
                'country' => 'us',
                'logoUrl' => 'http://logo.clearbit.com/www.medicalnewstoday.com'
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
                'source_id' => 'msnbc',
                'name' => 'MSNBC',
                'description' => 'Breaking news and in-depth analysis of the headlines, as well as commentary and informed perspectives from The Rachel Maddow Show, Morning Joe & more.',
                'url' => 'http://www.msnbc.com',
                'category' => 'general',
                'language' => 'en',
                'country' => 'us',
                'logoUrl' => 'http://logo.clearbit.com/www.msnbc.com'
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
    			'category' => 'science',
    			'language' => 'en',
    			'country' => 'us',
    			'logoUrl' => 'http://logo.clearbit.com/news.nationalgeographic.com'
    		),

            array(
                'source_id' => 'nbc-news',
                'name' => 'NBC News',
                'description' => 'Breaking news, videos, and the latest top stories in world news, business, politics, health and pop culture.',
                'url' => 'http://www.nbcnews.com',
                'category' => 'general',
                'language' => 'en',
                'country' => 'us',
                'logoUrl' => 'http://logo.clearbit.com/www.nbcnews.com'
            ),

            array(
                'source_id' => 'news24',
                'name' => 'News24',
                'description' => 'South Africa\'s premier news source, provides breaking news on national, world, Africa, sport, entertainment, technology and more.',
                'url' => 'http://www.news24.com',
                'category' => 'general',
                'language' => 'en',
                'country' => 'za',
                'logoUrl' => 'http://logo.clearbit.com/www.news24.com'
            ),

    		array(
    			'source_id' => 'new-scientist',
    			'name' => 'New Scientist',
    			'description' => 'Breaking science and technology news from around the world. Exclusive stories and expert analysis on space, technology, health, physics, life and Earth.',
    			'url' => 'https://www.newscientist.com/section/news',
    			'category' => 'science',
    			'language' => 'en',
    			'country' => 'us',
    			'logoUrl' => 'http://logo.clearbit.com/www.newscientist.com'
    		),

            array(
                'source_id' => 'news-com-au',
                'name' => 'News.com.au',
                'description' => 'We say what people are thinking and cover the issues that get people talking balancing Australian and global moments — from politics to pop culture.',
                'url' => 'http://www.news.com.au',
                'category' => 'general',
                'language' => 'en',
                'country' => 'au',
                'logoUrl' => 'http://logo.clearbit.com/www.news.com.au'
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
                'source_id' => 'next-big-future',
                'name' => 'Next Big Future',
                'description' => 'Coverage of science and technology that have the potential for disruption, and analysis of plans, policies, and technology that enable radical improvement.',
                'url' => 'https://www.nextbigfuture.com',
                'category' => 'science',
                'language' => 'en',
                'country' => 'us',
                'logoUrl' => 'http://logo.clearbit.com/www.nextbigfuture.com'
            ),

    		array(
    			'source_id' => 'nfl-news',
    			'name' => 'NFL News',
    			'description' => 'The official source for NFL news, schedules, stats, scores and more.',
    			'url' => 'http://www.nfl.com/news',
    			'category' => 'sports',
    			'language' => 'en',
    			'country' => 'us',
    			'logoUrl' => 'http://logo.clearbit.com/www.nfl.com'
    		),

            array(
                'source_id' => 'nhl-news',
                'name' => 'NHL News',
                'description' => 'The most up-to-date breaking hockey news from the official source including interviews, rumors, statistics and schedules.',
                'url' => 'https://www.nhl.com/news',
                'category' => 'sports',
                'language' => 'en',
                'country' => 'us',
                'logoUrl' => 'http://logo.clearbit.com/www.nhl.com/news'
            ),

            array(
                'source_id' => 'nrk',
                'name' => 'NRK',
                'description' => 'NRK er Norges største tilbud på nett: nyheter fra Norge og verden, lokalnyheter, radio- og tv-program, podcast, vær, helse-, kultur-, underholdning-, humor- og debattstoff.',
                'url' => 'https://www.nrk.no',
                'category' => 'general',
                'language' => 'no',
                'country' => 'no',
                'logoUrl' => 'http://logo.clearbit.com/www.nrk.no'
            ),

            array(
                'source_id' => 'politico',
                'name' => 'Politico',
                'description' => 'Political news about Congress, the White House, campaigns, lobbyists and issues.',
                'url' => 'https://www.politico.com',
                'category' => 'general',
                'language' => 'en',
                'country' => 'us',
                'logoUrl' => 'http://logo.clearbit.com/www.politico.com'
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
                'source_id' => 'rbc',
                'name' => 'RBC',
                'description' => 'Главные новости политики, экономики и бизнеса, комментарии аналитиков, финансовые данные с российских и мировых биржевых систем на сайте rbc.ru.',
                'url' => 'http://www.rbc.ru',
                'category' => 'general',
                'language' => 'ru',
                'country' => 'ru',
                'logoUrl' => 'http://logo.clearbit.com/www.rbc.ru'
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
    			'logoUrl' => 'http://s3.reutersmedia.net/resources_v2/images/reuters_social_logo.png'
    		),

            array(
                'source_id' => 'rt',
                'name' => 'RT',
                'description' => 'Актуальная картина дня на RT: круглосуточное ежедневное обновление новостей политики, бизнеса, финансов, спорта, науки, культуры. Онлайн-репортажи с места событий. Комментарии экспертов, актуальные интервью, фото и видео репортажи.',
                'url' => 'https://russian.rt.com',
                'category' => 'general',
                'language' => 'ru',
                'country' => 'ru',
                'logoUrl' => 'http://logo.clearbit.com/russian.rt.com'
            ),

            array(
                'source_id' => 'rte',
                'name' => 'RTE',
                'description' => 'Get all of the latest breaking local and international news stories as they happen, with up to the minute updates and analysis, from Ireland\'s National Broadcaster.',
                'url' => 'https://www.rte.ie/news',
                'category' => 'general',
                'language' => 'en',
                'country' => 'ie',
                'logoUrl' => 'http://logo.clearbit.com/www.rte.ie/news'
            ),

            array(
                'source_id' => 'rtl-nieuws',
                'name' => 'RTL Nieuws',
                'description' => 'Volg het nieuws terwijl het gebeurt. RTL Nieuws informeert haar lezers op een onafhankelijke, boeiende en toegankelijke wijze over belangrijke ontwikkelingen in eigen land en de rest van de wereld.',
                'url' => 'https://www.rtlnieuws.nl/',
                'category' => 'general',
                'language' => 'nl',
                'country' => 'nl',
                'logoUrl' => 'http://logo.clearbit.com/www.rtlnieuws.nl/'
            ),

            array(
                'source_id' => 'sabq',
                'name' => 'SABQ',
                'description' => 'صحيفة الكترونية سعودية هدفها السبق في نقل الحدث بمهنية ومصداقية خدمة للوطن والمواطن.',
                'url' => 'https://sabq.org',
                'category' => 'general',
                'language' => 'ar',
                'country' => 'sa',
                'logoUrl' => 'http://logo.clearbit.com/sabq.org'
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
                'source_id' => 'svenska-dagbladet',
                'name' => 'Svenska Dagbladet',
                'description' => 'Sveriges ledande mediesajt - SvD.se. Svenska Dagbladets nyhetssajt låter läsarna ta plats och fördjupar nyheterna.',
                'url' => 'https://www.svd.se',
                'category' => 'general',
                'language' => 'se',
                'country' => 'se',
                'logoUrl' => 'http://logo.clearbit.com/www.svd.se'
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
    			'category' => 'sports',
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
                'source_id' => 'techcrunch-cn',
                'name' => 'TechCrunch (CN)',
                'description' => 'TechCrunch is a leading technology media property, dedicated to obsessively profiling startups, reviewing new Internet products, and breaking tech news.',
                'url' => 'https://techcrunch.cn',
                'category' => 'technology',
                'language' => 'cn',
                'country' => 'cn',
                'logoUrl' => 'http://logo.clearbit.com/techcrunch.cn'
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
    			'logoUrl' => 'https://media.glassdoor.com/sqll/7800/economist-group-squarelogo.png'
    		),

            array(
                'source_id' => 'the-globe-and-mail',
                'name' => 'The Globe And Mail',
                'description' => 'The Globe and Mail offers the most authoritative news in Canada, featuring national and international news.',
                'url' => 'https://www.theglobeandmail.com',
                'category' => 'general',
                'language' => 'en',
                'country' => 'ca',
                'logoUrl' => 'http://logo.clearbit.com/www.theglobeandmail.com'
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
                'source_id' => 'the-hill',
                'name' => 'The Hill',
                'description' => 'The Hill is a top US political website, read by the White House and more lawmakers than any other site -- vital for policy, politics and election campaigns.',
                'url' => 'http://thehill.com',
                'category' => 'general',
                'language' => 'en',
                'country' => 'us',
                'logoUrl' => 'http://logo.clearbit.com/thehill.com'
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
    			'logoUrl' => 'https://i.vimeocdn.com/portrait/7695804_300x300'
    		),

            array(
                'source_id' => 'the-irish-times',
                'name' => 'The Irish Times',
                'description' => 'The Irish Times online. Latest news including sport, analysis, business, weather and more from the definitive brand of quality news in Ireland.',
                'url' => 'https://www.irishtimes.com',
                'category' => 'general',
                'language' => 'en',
                'country' => 'ie',
                'logoUrl' => 'http://logo.clearbit.com/www.irishtimes.com'
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
    			'category' => 'sports',
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
                'source_id' => 'vice-news',
                'name' => 'Vice News',
                'description' => 'Vice News is Vice Media, Inc.\'s current affairs channel, producing daily documentary essays and video through its website and YouTube channel. It promotes itself on its coverage of \"under - reported stories\".',
                'url' => 'https://news.vice.com',
                'category' => 'general',
                'language' => 'en',
                'country' => 'us',
                'logoUrl' => 'http://logo.clearbit.com/news.vice.com'
            ),

            array(
                'source_id' => 'wired',
                'name' => 'Wired',
                'description' => 'Wired is a monthly American magazine, published in print and online editions, that focuses on how emerging technologies affect culture, the economy, and politics.',
                'url' => 'https://www.wired.com',
                'category' => 'technology',
                'language' => 'en',
                'country' => 'us',
                'logoUrl' => 'http://logo.clearbit.com/www.wired.com'
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

            array(
                'source_id' => 'xinhua-net',
                'name' => 'Xinhua Net',
                'description' => '中国主要重点新闻网站,依托新华社遍布全球的采编网络,记者遍布世界100多个国家和地区,地方频道分布全国31个省市自治区,每天24小时同时使用6种语言滚动发稿,权威、准确、及时播发国内外重要新闻和重大突发事件,受众覆盖200多个国家和地区,发展论坛是全球知名的中文论坛。',
                'url' => 'http://xinhuanet.com/',
                'category' => 'general',
                'language' => 'cn',
                'country' => 'cn',
                'logoUrl' => 'http://logo.clearbit.com/xinhuanet.com/'
            ),

            array(
                'source_id' => 'ynet',
                'name' => 'Ynet',
                'description' => 'ynet דף הבית: אתר החדשות המוביל בישראל מבית ידיעות אחרונות. סיקור מלא של חדשות מישראל והעולם, ספורט, כלכלה, תרבות, אוכל, מדע וטבע, כל מה שקורה וכל מה שמעניין ב ynet.',
                'url' => 'http://www.ynet.co.il',
                'category' => 'general',
                'language' => 'he',
                'country' => 'is',
                'logoUrl' => 'http://logo.clearbit.com/www.ynet.co.il'
            ),






    	);

    	DB::table('sources')->insert($sources);
    }
}
