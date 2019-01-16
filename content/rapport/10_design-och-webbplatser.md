---
---

Analys av responsiv webbplatsdesign
=======================

Jag kommer att välja ut tre stycken webbplatser och studera dem utifrån hur de hanterar design i ett responsivt läge. Att en sida är responsiv innebär att sidans utseende förändras beroende på skärmstorleken. Även om en sida är responsiv innebär inte det per automatik att designen är bra, vilket gör ämnet intressant att undersöka som en del av en webbdesignkurs.

Avgränsning
-----------------------

För att göra detta har jag avgränsat mig till att studera hur webbplatserna hanterar header/meny, bilder och hur informationen presenteras så som stacking och klickbara länkar. Eftersom dessa delar är omfattande har jag valt att avgränsa mig ytterligare genom att endast kommentera varje del med några meningar och jag undersöker endast index-sidan.

Urval
-----------------------

Jag har valt att närmare undersöka mindre marknadsnoterade företags webbplatser. För att göra urvalet har jag gått efter de tre första bolagen som finns på börslistan för small cap hos DI. Dessa är A3 (Allmänna IT-och Telekomaktiebolaget), Actic Group och Active Biotech.

Anledningen till varför jag inte valt en kategori tex som banker eller artister är för att jag endast kommer undersöka hur och om företag anpassat sin webbplats till olika skärmar. Då har kategori av företag inte lika stor betydelse enligt min bedömning.

[DI.se Börslista](https://www.di.se/bors/small-cap/)

Metod
-----------------------

För att undersöka designen vid de olika skärmstorlekarna har jag valt Firefox följsamma designläge för Ipad och Iphone 6/7/8.

Jag har använt mig av kurslitteraturens artikel "Responsiv Web Design" för att förstå vad som gör en design responsiv. Jag har även använt artiklar på nätet så som "Responsiv headers & logos", "Hur bilder och bildförhållanden fungerar på den responsiva webben" och "10 Responsive webbdesign do´s and dont´s" för att få mer information om vad som är bra responsiv webdesign.


Resultat
-----------------------

### A3

[FIGURE src="image/a3big.PNG?height=500"]

A3 har en meny som är responsiv och spänner över hela sidan i alla lägen. Detta har uppnåtts genom att använda 100% som mått för bakgrunden och media queries för textbehållaren vid tre brytpunkter för att behålla lite marginaler mot sidorna. I desktop- och ipadläget är menyn i textform men i ipadläget hamnar dock länken i kolumn fyra (länkarna ovanför menyn) och samma kolumn i den utfällbara menyn, under den tredje kolumnen. I mobilläget används en hamburgarmeny i staplad form och headerdelen blir mindre i storlek.

[FIGURE src="image/a3small.PNG?height=300" class="center"]

Vad gäller bilderna så är de responsiva genom att används en procentsats som storlek på behållaren medans bilden skalas med en bestämd minsta höjd. Sedan används position tillsammans med media queries för att välja vilken del av den skalade bilden som ska synas för användaren. Ett annat exempel är den stora banner-bilden som har en bestämd höjd i px för behållaren som ändras med media queris. Bilden har sedan fritt spelrum att skala på bredden inom vald höjd. Bilden fungerar bra i både ipad- och desktopläge men innehåller texten "Fiber vinterrea" som endast delvis syns i mobilläge.

I övrigt hanteras sidans information och innehåll genom att man använder metoden där man staplar kolumnerna på varandra när skärmen krymper och kolumnerna blir även mindre. Många gånger används både bild och text i informationsboxarna vilket vållar lite problem när skärmen blir mindre. Som exempel kan nämnas en innehållsbox efter banner-bilden där text lägger sig över annan text i ipad- och mobilläge. Länkarna är oftast tillräckligt stora för att kunna träffas med fingret men vissa länkar i hamburgarmenyn är lite för små och ligger för nära varandra för att man ska vara säker på att träffa rätt länk.

### Actic Group

[FIGURE src="image/acticbig.PNG?height=500"]

Actic använder sig också av en responsiv 100% bred meny i textform i desktopläge men man har valt att använda hamburgarmenyn redan vid 1245px genom en media querie. Efter denna brytpunkt blir både menyn och loggans storlek mindre ner till mobilläget. Mellan ca 470px - 420px bred skärm hamnar loggan något bakom den bannerbild som används under headern.

[FIGURE src="image/acticsmall.PNG?height=300" class="center"]

På Actics första sida finns fyra bilder och dessa är responsiva. De två stora bilderna som används som bakgrund skalas endast på bredden, genom att ha en minsta höjd, för att anpassas till skärmstorlek. På den stora banner-bilden används även en media querie för att positionera ut bilden på den yta som finns att tillgå. De andra två bilderna som inte används som bakgrund är satt till bredd 100% och originalbilden är liten vilket gör att de inte behöver skalas.

För att hantera information på sidan har man valt två olika metoder. Vissa delar (tex press/kalender) har man valt att stapla på varandra och är därför fullt synliga i alla skärmar. Vissa delar (tex den korta infon under banner-bilden) har man istället valt att göra till en slider där man får se ett antal av informationsboxarna i taget. De klickbara länkarna på sidan är tillräckligt stora för att träffa med fingret och eftersom det inte ligger några andra länkar i närheten kan man inte råka klicka fel.

### Active Biotech

[FIGURE src="image/activebig.PNG?height=500"]

Biotechs meny består av text i desktopläge och hamburgarmeny i ipad- och iphoneläge och spänner över hela sidan. Media queries används för att ändra innehållet och storleken av menyn. Innehållet som försvinner från textversionen återfinns även här i den responsiva hamburgarmenyn. Även loggan är responsiv med 100% i höjd och går från att vara vänsterställd till att bli centrerad på mobilen.

[FIGURE src="image/activesmall.PNG?height=300" class="center"]

De bilder som finns på webbplatsen är, likt tidigare undersökta webbplatser, responsiva genom att använda gridets höjd och media queris för att bestämma positionen. I övrigt har bilden fritt spelrum så länge den täcker dess behållare.

För innehållet används stapling när kolumnerna blir för små. I övrigt återfinnas samma information men bilderna på celler och informationstexten har bytt plats med varandra på ipad och iphone jämfört med desktop. De klickbara länkarna har godtagbart anstånd och storlek för att användaren ska kunna nå rätt undersida när skärmen krymper.

Analys av hantering av responsiv webbdesign
-----------------------

Alla undersökta webbplatsers sidor är responsiva eftersom layouten är följsam och anpassas efter användarens skärmstorlek. Jag har inte behövt skrolla i sidledes eller zooma vilket är positivt. Överlag är även designen god i alla skärmstorlekarna. Däremot finns det vissa delar på webbplatserna som visserligen är responsiva men där designen har blivit mindre användarvänlig vid mindre skärmar.

När det kommer till design av responsiva menyer är det viktigt att headern/menyn blir mindre i storlek eftersom utrymmet minskar. Att gömma navigeringsmöjligheten (som användaren ändå inte behöver hela tiden) skapar även mer utrymme för den information som företaget vill föra fram. Alla undersökta webbplatser har använts sig av dessa råd även om de valt olika lägen för användningen av hamburgarmeny.

Ur ett designperspektiv skulle däremot A3 behöva se över sina kolumner i headerområdet för ipadläge eftersom den fjärde kolumnen vid två tillfällen hamnar under den tredje. Ett alternativ skulle vara att använda en media querie för ipads skärmstorlek för att få två kolumner per rad, och på så sätt skapa balans. Actic skulle även kunna se över storleken på sin header då lite av loggan försvinner bakom nästkommanden region vid vissa mått. För att undvika detta hade man kunnat vänta lite längre med att ändra headern till ett fast mått som är mindre än bilden eller sätta höjden till 100% på behållaren.

För att få bilder responsiva finns två olika sätt. Antingen låter man bilden bli proportionerligt mindre i både bredd och höjd eller så skalas vissa delar av bilden bort vid mindre skärmar. Alla undersökta sidor använder både dessa alternativ för att anpassa bilderna. Oftast används skalning och positionering vid stora banner-bilder med en fast höjd som varierar med media queries och 100% bredd på små bilder som man inte vill skala, tex porträtt. I mobilläget skulle däremot A3 behöva ändra positionering av banner-bildern och ett alternativ skulle kunna vara att använda högerställd position för att få bort bildtexten helt.

För att göra sidors innehåll responsivt kan man inte använda samma layout med kolumner i sidledes och sedan trycka ihop kolumnerna när skärmen minskar. De två sätt som de undersökta webbplatserna använder är att antingen börja stapla kolumnerna när utrymmet krymper eller gömma en del mindre viktig information i sliders. Här har A3 i vissa innehållsboxar valt starka bakgrundsbilder eller bilder med text vilket försvårar lärbarheten i ipad- och mobilläge. Alla klickbara länkar har oftast godtagbart anstånd och storlek, förutom en del av A3 gömda meny som med fördel hade kunnat göras större för användarvänlighetens skull.

Intressant är att jag har hittat vissa småfel i både mobil- och ipadläge men inte i desktopläge. Detta indikerar enligt mig att sidorna har skapats efter desktop och sedan anpassats efter andra skärmar. Vad jag har kunnat läsa från en del artiklar tex "10 Responsive webbdesign do´s and dont´s" är det bättre att göra tvärt om, dvs skapa efter mobilt läge och sedan skala upp för större enheter för att uppnå ultimat responsiv webbdesign.

Referenser
-----------------------

Nedan finns mina källor:

[A3](https://a3.se/)

[Actic Group](http://www.acticgroup.se/)

[Active Biotech](https://www.activebiotech.com/sv/)

[Artikel Responsiv Web Design](https://developers.google.com/web/fundamentals/design-and-ux/responsive/)

[Responsiv headers & logos](https://www.hongkiat.com/blog/responsive-headers-logo-tips-pitfalls/)

[Hur bilder och bildförhållanden fungerar på den responsiva webben](https://www.bernskioldmedia.com/sv/hur-bilder-och-bildforhallanden-fungerar-pa-den-responsiva-webben/)

[10 Responsive webbdesign do´s and dont´s](https://jdmdigital.co/news/responsive-dos-donts/)


Övrigt
-----------------------

Det är endast jag som har utfört studien.
