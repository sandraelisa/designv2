---
---

Webbplatsers laddningstid & användbarhet
=======================

Jag kommer att välja ut tre stycken webbplatser och dokumentera deras laddningstid.

Urval
-----------------------

Jag har valt att närmare undersöka de tre största revisionsbyråerna i Sverige. Dessa är E&Y, KPMG och PWC. Vanligtvis pratar man om "The big four" inom branschen men eftersom jag bara behöver tre hemsidor har jag valt de tre med störst marknadsandelar enligt en artikel från SvD från 2004.

[Länk till artikel i SvD](https://www.svd.se/de-stora-revisionsbyraerna-i-sverige-blir-allt-storre-3K4a)

Metod
-----------------------

Jag har använt Google Pagespeed för att mäta sidornas hastighet. Angivet värde i tabellen är det betyg som Google Pagespeed har gett webbplatsen.

Jag har även använt mig av devtools i Mozilla Firefox för att ta fram laddningstid (slutfört i devtools), resurser (förfrågningar i devtools) och total storlek (överfört i devtools). Angivna värden i tabellen är det genomsnittliga värdet vid tre omladdningar av varje sida.

Istället för excel har jag använt markdown-tabeller nedan.


Resultat
-----------------------

### Ernst & Young

[FIGURE src="image/ey.PNG?height=500"]

Google Pagespeed
|        | Sida 1  | Sida 2  | Sida 3 |
|--------|---------|---------|--------|
|Mobile:  |  52     |  59     |  73    |
|Desktop: |  91     |  100    |  100   |




Devtools
|        | Sida 1  | Sida 2  | Sida 3 |
|--------|---------|---------|--------|
|Laddningstid:  |  5,47 s     |  3,61 s     |  3,60 s    |
|Resurser: |  61     |  50    |  46   |
|Total storlek: |  2,35 mb     |  1,07 mb    |  1,04 mb   |


[Sida 1 "Hem"](https://www.ey.com/se/sv/home)

[Sida 2 "Insikter"](https://www.ey.com/se/sv/issues)

[Sida 3 "Din bransch"](https://www.ey.com/se/sv/industries)

E&Y har en mindre storlek på webbplats och i laddtider i förhållande till KPMG och PWC. Betyget för desktop från Google Pagespeed visar att alla de tre valda sidorna har en hög laddningshastighet. Av devtools framgår att ingen av sidorna är särskilt stora utan håller sig kring 1-2 MB, vilket är bra. Däremot skulle de behöva arbeta mer med hastigheten för mobila enheter. En sak de skulle kunna göra för att förbättra hastigheten i mobilen är enligt Pagespeed att använda bildformat så som JPEG 2000 och JPEG XR istället för JPEG och PNG.


### KPMG

[FIGURE src="image/kpmg.PNG?height=500"]

Google Pagespeed
|        | Sida 1  | Sida 2  | Sida 3 |
|--------|---------|---------|--------|
|Mobile:  |  44     |  40     |  36    |
|Desktop: |  97     |  96    |  98   |



Devtools
|        | Sida 1  | Sida 2  | Sida 3 |
|--------|---------|---------|--------|
|Laddningstid:  |  6,31 s     |  6,08 s     |  6,13 s    |
|Resurser: |  95     |  78    |  86   |
|Total storlek: |  5,03 mb     |  3,28 mb    |  3,76 mb   |


[Sida 1 "Hem"](https://home.kpmg.com/se/sv/home.html)

[Sida 2 "Nyheter"](https://home.kpmg.com/se/sv/home/nyheter-rapporter.html)

[Sida 3 "Branscher"](https://home.kpmg.com/se/sv/home/industries.html)

KPMG webbplats (de valda sidorna) är både större och tar längre tid att ladda enligt testerna, än E&Y webbplats. Min upplevelse är att det märks som användare då många delar av designen flyttar på sig vid en omladdning av sidan. Sida 1 som är hemsidan är uppåt 5 MB stor och har många bilder så här skulle de kunna arbeta med att få ner storleken på bilderna. Dessutom behöver även KPMG arbeta med hastigheten för mobila enheter eftersom den får låga betyg i Pagespeed.

### PWC

[FIGURE src="image/pwc.PNG?height=500"]


Google Pagespeed
|        | Sida 1  | Sida 2  | Sida 3 |
|--------|---------|---------|--------|
|Mobile:  |  21     |  19     |  29    |
|Desktop: |  73     |  63    |  77   |



Devtools
|        | Sida 1  | Sida 2  | Sida 3 |
|--------|---------|---------|--------|
|Laddningstid:  |  4,97 s     |  4,51 s     |  3,11 s    |
|Resurser: |  72     |  88    |  62   |
|Total storlek: |  4,26 mb     |  6,25 mb    |  3,58 mb   |


[Sida 1 "Hem"](https://www.pwc.se/)

[Sida 2 "Om oss"](https://www.pwc.se/sv/om-pwc.html)

[Sida 3 "Branscher"](https://www.pwc.se/sv/branscher.html)

Även om PWC webbplats hade de sämsta betygen enligt Pagespeed så tycker jag att de hade mycket bättre värden på laddningstid, när jag kollar devtools, i förhållande till KPMG. PWC har inte lyckats med att få ner storleken på sina sidor utan de är alla ganska stora. Det tar även lite tid innan användaren blir inbjuden till att få komma in på sidan vilket är den stora anledningen till varför de fick sämre betyg på desktop än de andra webbplatserna. Detta är därför ett förbättringsområde.

Analys
-----------------------

Alla av de valda webbplatserna är mer eller mindre bildtunga sidor och har stora bilder till sina headers/sliders samt ett stor antal mindre bilder som bokmärken till texten. Det största förbättringsområdet för alla webbplats är hastigheten för mobila enheter. Där återkommer både för E&Y och KPMG problem med bilder så som "använda ett annat format för bilderna", "koda bilder effektivt" och att "skjuta upp inläsning av bilder som inte visas". PWC har istället ett helt annat problem som verkar ta mycket av laddtiden, vilket är "minska svarstiden från servern". Detta var även något som jag märkte innan jag sett att det var ett förbättringsområde enligt Pagespeed.

Även om alla sidor hade relativt bra betyg och laddtid för desktop så är det viktigt att även ha det för mobila enheter. Detta eftersom det blir mer och mer vanligt att använda sin mobil istället för datorn.

Vinnare av testet får bli E&Y eftersom de lyckats med att både få ner laddtiderna och storleken på sidorna, samtidigt som de fick bäst betyg på Google Pagespeed för både desktop och mobila enheter. På andra plats sätter jag KPMG även om de hade längre laddtider än PWC. Anledningen till varför PWC hamnar längst ner i rangordningen är att det tar någon sekund att ens bli insläppt på webbplatsen.

Jag anser att drömläget vore att laddtiden ligger under 3 sekunder för att undvika att användaren ser att layouten på sidan hoppar runt. Däremot är det ingen av sidorna som klarar av att leverera inom den laddtiden. Känslan är ändå att webbplatserna rent generellt är ganska snabba i förhållande till den mängden stora och bra bilder de har.

Referenser
-----------------------

Nedan finns mina källor:

[Länkt till Google Pagespeed](https://developers.google.com/speed/pagespeed/insights/)


Övrigt
-----------------------

Det är endast jag som har utfört studien.
