-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2023 at 02:04 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cnnnews`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutus`
--

CREATE TABLE `aboutus` (
  `ID` int(11) NOT NULL,
  `info` varchar(1000) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aboutus`
--

INSERT INTO `aboutus` (`ID`, `info`, `photo`) VALUES
(1, 'We are a news website dedicated to providing the latest and most accurate news from around the world. Our team of experienced journalists and editors work tirelessly to bring you the most up-to-date news on a variety of topics, including world news, politics, sports, and more. At CNN, we believe in the power of journalism to inform and inspire people. Our mission is to be the most trusted source of news and information for our audience, and we take that responsibility very seriously.', 'cnnteam.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `name`, `surname`, `email`, `password`) VALUES
(2, 'Ali', 'Bekeri', 'alibekeri@gmail.com', '11111111'),
(10, 'Elvir', 'Kabashi', 'kabashielvir1@gmail.com', '22222222');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `ID` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`ID`, `name`, `email`, `subject`, `message`) VALUES
(5, 'Elvir', 'kabashielvir1@gmail.com', 'Pyetje', 'Per cka sherben kompania juaj kom interes te madh per te?');

-- --------------------------------------------------------

--
-- Stand-in structure for view `dateformat`
-- (See below for the actual view)
--
CREATE TABLE `dateformat` (
`dateFormat` varchar(73)
);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `ID` int(11) NOT NULL,
  `chapter` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `subCategory` varchar(255) DEFAULT NULL,
  `date` datetime DEFAULT current_timestamp(),
  `about` varchar(1500) NOT NULL,
  `admin` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`ID`, `chapter`, `photo`, `title`, `category`, `subCategory`, `date`, `about`, `admin`) VALUES
(84, 'EUROPE ', '221222182104-putin-1222.jpg', 'Biden’s Ukraine visit upstages Putin and leaves Moscow’s military pundits raging', 'world', 'around-the-world', '2023-02-23 23:05:39', 'CNN\r\n — \r\nPresident Joe Biden’s surprise visit to Ukraine sparked anger and embarrassment among many of Russia’s hawkish military pundits on Monday, increasing pressure on Vladimir Putin as the Russian leader prepares to justify his stuttering invasion in a national address.\r\n\r\nBiden’s historic visit came days before the one-year anniversary of Russia’s full-scale invasion of Ukraine, providing a symbolic boost to Kyiv at a crucial juncture in the conflict.\r\n\r\nBut the visit caused fury in Russian pro-military and ultranationalist circles, as it upstages Putin on the eve of a major address in which the Russian president is expected to tout the supposed achievements of what he euphemistically calls a “special military operation.”\r\n\r\n“Biden in [Kyiv]. Demonstrative humiliation of Russia,” Russian journalist Sergey Mardan wrote in a snarky response on his Telegram channel. “Tales of miraculous hypersonics may be left for children. Just like spells about the holy war we are waging with the entire West.”\r\n\r\n“I guess there are lunch breaks in a holy war,” he said.', 10),
(85, 'MIDDLE EAST ', '230223020818-01-gaza-city-airstrike-022323.jpg', 'Israel launches airstrikes on Gaza after rocket attacks as violence escalates', 'world', 'around-the-world', '2023-02-23 23:07:30', 'CNN\r\n — \r\nIsrael launched airstrikes targeting alleged weapons manufacturing and storage sites in Gaza on Thursday, following a rocket attack from the coastal enclave, the Israel Defense Forces (IDF) said.\r\n\r\nIn a statement, the IDF said “fighter jets struck a weapons manufacturing site” in central Gaza owned by Hamas, the Palestinian militant group that runs Gaza.\r\n\r\n“In parallel, a military compound belonging to the Hamas Terrorist Organization in the northern Gaza Strip which also was used as a naval weapons storage warehouse was struck,” the statement said.\r\n\r\nEarlier Thursday, the IDF said five rockets fired from Gaza toward Israeli territory, including the cities of Ashkelon and Sderot, were intercepted and another rocket fell in an open area.\r\n\r\nThe airstrikes come after the deaths of at least 11 Palestinians in Nablus in the occupied West Bank on Wednesday, which occurred during a raid by the Israeli military that also left at least 500 injured, Palestinian officials said Thursday. One of the dead targeted in the Nablus raid was a Hamas member, and two were Islamic Jihad commanders, the two militant groups said earlier.', 10),
(86, 'AFRICA ', '230223133115.jpg', 'Nigeria opposition senatorial candidate gunned down days before crucial elections', 'world', 'around-the-world', '2023-02-23 23:20:08', 'CNN\r\n — \r\nA manhunt is underway for the killers of a senatorial candidate for Nigeria’s opposition Labor Party, who was shot and burned in his campaign vehicle late Wednesday in the country’s southeastern Enugu State, local police said Thursday.\r\n\r\nThe politician, Oyibo Chukwu, was murdered along with an unnamed personal aide by assailants police suspect were operatives of banned separatist group IPOB and its militant wing ESN.\r\n\r\nChukwu’s murder was one of multiple attacks targeted at members of other political parties late Wednesday, a police statement said, adding that investigations were ongoing.\r\n\r\n“The Commissioner of Police, Enugu State Command, CP Ahmed Ammani, fdc, has ordered the … manhunt of the subversive criminal elements, suspected to be IPOB/ESN renegades, who … ambushed and simultaneously attacked and murdered People’s Democratic Party (PDP) and Labour Party (LP) members, and also attempted to attack the convoy of the All Progressive Congress (APC) Governorship Candidate.”', 2),
(87, 'Golf ', '230220085437-02-genesis.webp', 'Tiger Woods produces best performance since car crash as Jon Rahm wins Genesis Invitational to regain world No. 1 spot', 'sport', 'more-than-a-game', '2023-02-24 12:40:28', 'CNN\r\n — \r\nTiger Woods played his best golf since the car crash in February 2021 that threatened to end his career to finish tied-45th at the Genesis Invitational, as Jon Rahm walked away with his third PGA Tour win of 2023 to regain the world No. 1 spot.\r\n\r\nIt was Woods’ first competitive outing since The Open Championship in July 2022 and his first non-major appearance since October 2020.\r\n\r\nThe 15-time major winner has played sparingly since sustaining serious leg injuries in the crash in Southern California, but shot his lowest single round score – 67 on Saturday – since the crash en route to finishing one-under-par for the tournament.\r\n\r\nFollowing his final round, Woods said his goal from now on is to play the four majors every year, but he doesn’t expect “to play too much more than that.”\r\n\r\n“My body and my leg and my back just won’t allow me to play much more than that anymore,” he told CBS. “So that was my goal last year and I was able to play three of the four, and this year, I can hopefully play all four. That is going to be my schedule going forward because of all of the limitations I have.', 2),
(88, 'Football ', '230221121323-02-real-madrid-liverpool.webp', 'Fireworks set off in the middle of night next to Real Madrid team hotel ahead of Champions League clash against Liverpool', 'sport', 'more-than-a-game', '2023-02-24 12:42:22', 'CNN\r\n — \r\nWith Liverpool struggling on the pitch this season, the team is in need of all the help it can get ahead of Tuesday’s crunch Champions League first-leg round-of-16 match against Real Madrid.\r\n\r\nLiverpool’s players might now have the advantage of playing against a tired Real team after fireworks were set off in the middle of the night outside of the hotel the Spanish side is staying in.\r\n\r\n“We can confirm officers attended following reports of fireworks being set off outside a hotel in Liverpool city centre in the early hours of today (Tuesday 21 February),” Merseyside Police said in a statement.\r\n\r\n“It was reported at 12.55am that a group were setting off the fireworks close to the INNSiDE Hotel on Old Hall Street. It is against the law to carry or use fireworks if you are under 18, and illegal for people of any age to let off or throw a firework in a public place.', 2),
(93, 'Tennis ', '230222160718-03-sania-mirza-retires.webp', 'After trailblazing 20-year career, Indian tennis superstar Sania Mirza plays her final match', 'sport', 'more-than-a-game', '2023-02-24 13:24:49', 'CNN\r\n — \r\nIt’s never easy to know when to say goodbye to a professional career spanning 20 years, but six-time grand slam winner and tennis trailblazer Sania Mirza says her retirement this week is very much on her “own terms.”\r\n\r\nThe 36-year-old Indian star played her final professional match at the Dubai Duty Free Tennis Championships Tuesday, where, along with doubles partner Madison Keys she lost to Veronika Kudermetova and Liudmila Samsonova 6-4 6-0. Mirza had previously announced her retirement earlier this year.\r\n\r\n“I feel a lot of gratitude today. I’ll still be around tennis. It’s just not competing,” Mirza told reporters.\r\n\r\nThe star, mother to four-year-old son Izhaan, also plans to mentor the women’s Royal Challengers Bangalore cricket team.\r\n\r\nAccording to the team, Mirza will “guide our women cricketers about excelling under pressure.”\r\n\r\n“The whole concept of me being there has nothing to do with cricket,” Mirza told the WTA website. “It actually has to do with the mental aspect of things with these younger girls.\r\n\r\n“They’ve never been in positions where they’ve had careers, so much money, millions riding on them. Many of them haven’t been on TV, haven’t done ads, shoots. It’s so easy to get distracted from that stuff. It’s also very easy to tense up and feel the pressure because there’s so much expectation of you.”\r\n\r\nFormer world No.1 Victoria Azarenka told the WTA website that what Mirza had done for India, “for the region here, is absolutely remarkable.”', 10),
(94, 'LATEST HEADLINES ', '230213093407-file-trump-1122.jpg', 'Exclusive: How a box with classified documents ended up in Trump’s office months after FBI searched Mar-a-Lago', 'news', 'head', '2023-02-24 13:29:27', 'Washington\r\nCNN\r\n — \r\nThe Justice Department wants to know how a box containing a handful of classified records scattered among copies of presidential schedules turned up at Mar-a-Lago late last year, well after several rounds of searches of the property by federal agents and aides to former President Donald Trump, according to people familiar with the matter.\r\n\r\nInvestigators working for special counsel Jack Smith in recent weeks have interviewed a Trump aide who copied classified materials found in the box using her phone to put them onto a laptop. After a voluntary interview with the aide, prosecutors subpoenaed the password to the laptop, which she provided, according to one of the sources.\r\n\r\nThe classified documents contained in the box were discovered in December, after the Justice Department told Trump’s legal team to conduct yet another search for documents at Trump’s Mar-a-Lago resort.\r\n\r\nPeople familiar with the Trump legal team’s efforts to locate documents describe a confusing chain of events that delayed discovery of the box, including having its contents uploaded to the cloud, emailed to a Trump employee, and moved to an offsite location before finally ending up back at a Mar-a-Lago bridal suite that is now Trump’s office – the very place that the FBI had searched just weeks earlier.\r\n\r\nTrump’s legal team has acknowledged in recent weeks they turned over to the special counsel the box and a laptop containing its scanned contents. But prosecutors have continued ', 10),
(95, 'FACTS FIRST ', '230219104515-sotu-ltg-full-00035006.png', 'Fact check: Pence falsely claims opponents admitted there weren’t Chinese spy balloons over the US while he was VP', 'news', 'news', '2023-02-24 13:30:55', 'Washington\r\nCNN\r\n — \r\nFormer Vice President Mike Pence, who is now considering a run for president, was asked on Fox on Wednesday about the Biden administration’s criticism of rail deregulation efforts by the Trump administration.\r\n\r\nFox host Martha MacCallum told Pence that, in the wake of the train derailment in East Palestine, Ohio, in early February, “They’re blaming the Trump administration. They say it’s the regulations that you peeled back that led to this lack of safety.”\r\n\r\nPence replied: “Yeah, same crowd that said that Chinese balloons floated over our administration, right – until they admitted that they didn’t.”\r\n\r\nFacts First: Pence’s claim is false. Neither the Biden administration nor the Pentagon has “admitted” that Chinese spy balloons didn’t float over the United States during the Trump-Pence administration. In fact, the Biden administration and the Pentagon have said this month that Chinese spy balloons did float over the US during the Trump-Pence era. The Pentagon has briefed Congress about these suspected Trump-era incidents; former Trump administration national security officials who were briefed by the intelligence community last week have not disputed the existence of these incidents after the briefings; and CNN has viewed excerpts from a 2022 military intelligence report that said a Chinese spy balloon in 2019 “drifted past Hawaii and across Florida before continuing its journey.”', 10),
(96, 'KFILE ', '230221145136-file-nikki-haley-2010.jpg', 'Nikki Haley defended right to secession, Confederate History Month and the Confederate flag in 2010 talk', 'news', 'news', '2023-02-24 13:33:20', 'CNN\r\n — \r\nFormer South Carolina Gov. Nikki Haley defended states’ rights to secede from the United States, South Carolina’s Confederate History Month and the Confederate flag in a 2010 interview with a local activist group that “fights attacks against Southern Culture.”\r\n\r\nHaley, who was running for South Carolina governor at the time, made the comments during an interview with the now defunct “The Palmetto Patriots,” a group which included a one-time board member of a White nationalist organization.\r\n\r\nThe former UN ambassador also described the Civil War as two sides fighting for different values, one for “tradition” and one for “change.”\r\n\r\nHaley announced last week she was running for president, becoming the first official major challenger to former President Donald Trump.\r\n\r\nThe interview was posted on the group’s YouTube at the time and resurfaced over the years, most recently by Patriots Takes, an anonymous Twitter account that monitors right wing extremism. CNN’s KFile reviewed the interviews as part of a look into Haley’s early political career.\r\n\r\nOne of the Palmetto Patriots’ interviewers was Robert Slimp, a pastor and member of the Sons of Confederate Veterans and one-time board member and active member of the Council of Conservative Citizens (CCC), a White nationalist group. The CCC is a self-described White-rights group that opposes non-White immigration and advocates a White nationalist ideology. The group reportedly inspired Charleston shooter Dylann Roof, the', 10),
(97, 'ANALYSIS ', '230130130724-01-kevin-mccarthy-0130.webp', 'McCarthy rewards the pro-Trump radicals who put him in power', 'news', 'head', '2023-02-24 13:44:25', 'CNN\r\n — \r\nHouse Speaker Kevin McCarthy is keeping his word to radicals who put him in power and rewarding those who can keep him there, paving a smooth start to his tenure that may, however, be storing up trouble down the road.\r\n\r\nThe California Republican handed hard-right House members with plum committee assignments, dumped several high-profile Democrats from key panels to please the conservative media universe, launched investigations into the “weaponization” of government against Republicans like former President Donald Trump and gave a pass to Georgia Rep. Marjorie Taylor Greene when she heckled President Joe Biden during the State of the Union address or suggested “national divorce” between red and blue states. He’s refused to demand the resignation of New York Rep. George Santos, a serial fabulist, who might be an embarrassment but whose seat remains critical to the GOP’s tiny majority.', 2),
(98, 'FAULT LINES ', '230220172704-01-joe-biden-maryland-0215.jpg', 'How an old debate previews Biden’s new strategy for winning senior voters', 'news', 'head', '2023-02-24 13:47:27', 'CNN\r\n — \r\nIn pressing Republicans on Social Security and Medicare, President Joe Biden is reprising one of the most dramatic moments of his long career.\r\n\r\nDuring the 2012 vice-presidential debate, Biden engaged in a nearly 11-minute exchange with GOP nominee Paul Ryan over Republican plans to reconfigure the two massive programs for the elderly, several of which Ryan had authored himself.\r\n\r\nBiden and many Democrats felt he had won the argument on stage. Yet on Election Day, Ryan and GOP presidential nominee Mitt Romney routed Biden and President Barack Obama among White seniors, and beat them soundly among seniors overall, exit polls found.\r\n\r\nThat outcome underscores the obstacles facing Biden now as he tries to recapture older voters by portraying Republicans as threats to the two towers of America’s safety net for the elderly. While polls consistently show that voters trust Democrats more than Republicans to safeguard the programs, GOP presidential nominees have carried all seniors in every presidential election back to 2004 and have reached at least 58% support among White seniors in each of the past four contests, exit polls have found. Democrats have likewise consistently struggled among those nearing retirement, older working adults aged 45-64.', 2),
(99, 'WAR ', '230220130939-01-presidents-war-zone-biden.jpg', 'In pictures: US presidents in war zones', 'news', 'head', '2023-02-24 13:49:20', 'US President Joe Biden, left, walks with Ukrainian President Volodymyr Zelensky during a surprise visit to Kyiv, Ukraine, on Monday, February 20. Evan Vucci/AP\r\n\r\n\r\nBy Bernadette Tuazon, Sarah Tilotta and Rebecca Wright, CNN\r\n\r\nUS President Joe Biden made a surprise visit to Kyiv, Ukraine, on Monday for the first time since Russia invaded Ukraine almost a year ago.\r\n\r\nWhile in Kyiv, Biden announced a half-billion dollars in new assistance, including more military equipment, and he said new sanctions would be imposed on Moscow later in the week.\r\n\r\nHere are some other times in history that a US president has visited a war zone.', 2),
(100, 'FAST FOOD ', '230216155854-01-fast-food-architecture-file.jpg', 'Why Pizza Hut’s red roofs and McDonald’s play places have disappeared', 'news', 'news', '2023-02-24 13:51:12', 'New York\r\nCNN Business\r\n — \r\nFor decades, bright, playful and oddly-shaped fast-food restaurants dotted the roadside along America’s highways.\r\n\r\nYou’d drive by Howard Johnson’s with its orange roofs and then pass Pizza Hut’s red-topped huts. A few more miles and there was the roadside White Castle with its turrets. Arby’s roof was shaped like a wagon and Denny’s resembled a boomerang. And then McDonald’s, with its neon golden arches towering above its restaurants.\r\n\r\nThese quirky designs were an early form of brand advertising, gimmicks meant to grab drivers’ attention and get them to stop in.\r\n\r\nAs fast-food chains spread across the US after World War II, new roadside restaurant brands needed to stand out. Television was new media not yet beamed into every single home, newspapers were still ascendant and social media unimaginable.\r\n\r\nSo restaurant chains turned to architecture as a key tool to promote their brand and help create their corporate identity.', 2),
(101, 'JOBS ', '230214142227-goldman-sachs-empty-chairs-restricted.jpg', 'The job market is making traders’ heads explode', 'news', 'news', '2023-02-24 13:51:59', 'New York\r\nCNN\r\n — \r\nThe labor market ballooned in January when the US economy added an astonishing 517,000 jobs, blowing past Wall Street’s expectations. But at the same time, a slew of corporate layoff announcements have prompted questions about whether there could be a broad slowdown on the horizon.\r\n\r\nSo what’s going on?\r\n\r\nIt’s a tech thing: Many of the companies that have recently announced layoffs — like Google, Zoom, Meta, Microsoft, IBM, Intel and Amazon — hired aggressively because of an uptick in demand during the pandemic. But the post-pandemic return to the office means there’s far less need for worker connectivity and online shopping. That’s left these high-value companies overstaffed and out of balance. Now, they have to respond to investor pressure to cut costs. And that means cutting jobs.\r\n\r\nIn an assessment of fourth-quarter earnings calls, Goldman Sachs economists found that “many firms were pessimistic on the labor market,” though they noted that “a majority of firms are actually discussing the high profile [tech] layoffs themselves but not indicating that their own companies will be laying off or have laid off any workers.”\r\n\r\nIt makes sense that these so-called “loud layoffs” have a chilling effect on the rest of the market — even though they aren’t actually indicative of bad news for the entire economy.', 2),
(102, 'TRAVEL ', '230223132920-woman-lives-on-italian-prison-island-card.jpg', 'She’s the only woman living on an island of convicted criminals', 'world', 'featured-sections', '2023-02-24 14:40:00', 'CNN\r\n — \r\nWhen Giulia Manca traveled to Pianosa, a former Italian prison island, back in 2011, she was looking forward to a relaxing sunshine break before returning home.\r\n\r\nBut 12 years after checking into the beachfront Hotel Milena, which is staffed by supervised convicts on probation, Manca has remained on the island known as the Alcatraz of the Tyrrhenian Sea.\r\n\r\nNow the only woman living in the ghost village of Pianosa, part of Tuscany’s archipelago marine park, Manca serves as both the manager of the hotel and supervisor of the island’s rehabilitation program, run by Arnera, a nonprofit organization with the social mission of helping vulnerable people such as inmates get back into society, and Tuscany’s prison authorities.\r\n\r\n“I stayed one week at the hotel and didn’t want to leave,” Manca tells CNN. “It was a unique holiday and the rehab project fascinated me, how these inmates were given a second chance in life.', 2),
(106, 'SPORTS ', '221222060536-01-argentine-tattooists-messi-tributes-spt-intl.webp', 'Argentine tattooists swamped by demand for Messi tributes', 'world', 'special-feature', '2023-02-24 14:57:11', 'Reuters\r\n — \r\nSince Argentina’s World Cup win turned Buenos Aires into a massive street party, tattoo artists have been hard at work inking the image of Lionel Messi on the bodies of fans paying tribute to the man who has come to rival the legend of the country’s other soccer god, Diego Maradona.\r\n\r\nIn Argentina, where soccer generates something akin to a religious fervor, millions of men and women took to the streets on Tuesday to give the national team a hero’s welcome as they toured the capital by bus after returning from Qatar.', 2),
(107, 'CNN HEROES ', '221212101735-01-cnn-heroes-refugee-sisters-tracy-peck.jpg', 'Two sisters just reunited with the mystery woman who gave them $100 on a plane 23 years ago', 'world', 'special-feature', '2023-02-24 15:05:57', 'New York\r\nCNN\r\n — \r\nAyda Zugay clasps her hands together, trying to keep her nerves in check.\r\n\r\nShe’s been waiting for this day for decades.\r\n\r\nAt any moment the woman she tried to find for so long will finally be here.\r\n\r\nIt’s been more than 23 years since a stranger on an airplane gave Zugay and her sister an envelope with $100 in it that would change their lives.\r\n\r\nA CNN story last spring featured Zugay’s quest to find the woman and thank her. At the time, Zugay only knew that the woman’s first name was Tracy, that she played tennis and that her act of generosity had made a tremendous difference in the lives of two refugees from the former Yugoslavia who were just beginning a new life in the United States.\r\n\r\nThe story reached millions of readers – many of whom sent in tips to help with the search. Several of them saw the handwriting on the envelope and knew right away who was behind it: Tracy Peck of Blaine, Minnesota.\r\n\r\nZugay and her older sister, Vanja Contino, reconnected with Peck in an emotional Zoom call that weekend.\r\n\r\nBut they haven’t had a chance to meet in person – until now, when an invitation to appear as special guests on “CNN Heroes: An All-Star Tribute” has brought all three women to New York City.', 10),
(108, 'SPORTS ', '230221134115-02-boxing-2024-olympics-qualification-iba.webp', 'Infighting in the sport and Russia’s invasion of Ukraine leaves Olympic boxing on the ropes', 'world', 'special-feature', '2023-02-24 15:07:46', 'CNN\r\n — \r\nIt’s an Olympic sport which has its origins in Ancient Greece, and which helped stars of the ring such as Muhammad Ali, George Foreman, Joe Frazier, Nicola Adams, Claressa Shields and Katie Taylor become known to global audiences.\r\n\r\nThese days, however, Olympic boxing is on the ropes, bruised and battered by infighting.\r\n\r\nUSA Boxing accused the Russian-led International Boxing Association (IBA) on Monday of possible “sabotage,” saying the IBA had announced a “false and misleading” qualification process for the 2024 Olympic Games.\r\n\r\nIt comes after tension between the IBA and the International Olympic Committee (IOC) as well as several boxing federations around the world, which has led to eight countries, including the US, boycotting the forthcoming women’s and men’s world championships, according to Reuters.\r\n\r\nHow did Olympic boxing reach this tipping point and what is next for the sport with Paris 2024 a little over a year away?', 10),
(109, 'WEATHER ', '230224044905-01-san-bernardino-mountains-snow-022323-restricted.jpg', 'Rare blizzard warnings issued in Southern California as Midwest digs out from powerful winter storm', 'world', 'featured-sections', '2023-02-24 15:09:38', 'CNN\r\n — \r\nAs a ferocious, multiday winter storm begins to subside after delivering heavy snow and ice to a large swath of the country this week and leaving thousands without power in the Midwest, another storm is threatening rain and snow in the West Friday, prompting rare blizzard warnings in Southern California.\r\n\r\nIn its first-ever blizzard warning, the National Weather Service in San Diego said the San Bernardino County mountains could see 3 to 5 feet of snow through Saturday morning.', 10),
(110, 'Politic ', '230224111154-guantanamo-camp-file.webp', 'US transfers two brothers detained in Guantanamo Bay to Pakistan', 'news', 'news', '2023-02-24 15:11:11', 'Washington\r\nCNN\r\n — \r\nThe US transferred two brothers detained at Guantanamo Bay in Cuba to Pakistan, the Defense Department announced Thursday, part of the Biden administration’s ongoing efforts to close the prison facility.\r\n\r\nAbdul Rabbani and Mohammed Rabbani were held as detainees in the US’ decadeslong war against terror for operating safe houses used by al Qaeda members, including Khalid Sheikh Mohammed, the accused mastermind of the 9/11 attacks.\r\n\r\nThe brothers, who were never charged with a crime, were repatriated to Pakistan after it was determined that their detention was no longer needed to protect against a “continuing, significant threat” to the United States, the Defense Department said in a statement.\r\n\r\n“The United States appreciates the willingness of the Government of Pakistan and other partners to support ongoing U.S. efforts focused on responsibly reducing the detainee population and ultimately closing the Guantanamo Bay facility,” the Pentagon said.\r\n\r\nDefense Secretary Lloyd Austin had notified Congress in January of his intent to repatriate the Rabbani brothers to Pakistan.', 10),
(111, 'US Sports ', '230220075702-01-anderson-comas-file.jpg', 'Chicago White Sox Minor League baseball player Anderson Comas announces he is gay', 'sport', 'beyond-the-white-line', '2023-02-24 15:24:50', 'CNN\r\n — \r\nChicago White Sox Minor League baseball player Anderson Comas announced he is “proudly and happily part of the LGTBQ+ community,” in an Instagram post on Sunday.\r\n\r\n“I’m also a human with a great soul, I’m respectful, I’m a lover, I love my family and friends and that’s what really matters, I enjoy my work a lot, being a professional baseball player is the best thing that happened to me so I just wanna say something to those people that says that gay people can not be someone in this life, well look at me I’m Gay and I’m a professional athlete so that didn’t stopped (sic) me to make my dreams come true,” Comas said.\r\n\r\nComas, 23, is a converted outfielder who now pitches. He spent last season in the White Sox single A team, the Kannapolis Cannon Ballers in North Carolina.\r\n\r\nHe warned that his Instagram post was not for everyone.\r\n\r\n“If you’re homophobic this post may not (be) for you….so you can see we all matters and we all are the same…\r\n\r\n“I’m doing this cause I wanna be an inspiration for those like me out there fitting for their dreams, please don’t listen to those stupid things that people say about us, fight for your dreams, believe in yourself and go for it,” he added.', 10),
(112, 'US Sports ', '230215165304-11-kansas-city-chiefs-parade-0215.webp', 'Wild celebrations greet Kansas City Chiefs as they take to the streets for Super Bowl parade', 'sport', 'beyond-the-white-line', '2023-02-24 15:26:32', 'CNN\r\n — \r\nIt was party time in Missouri on Wednesday as the Chiefs continued their celebrations after Sunday’s Super Bowl win with a parade through the streets of Kansas City and a rally where two-time Super Bowl MVP Patrick Mahomes told the crowd he was planning to see them in the same place next year.\r\n\r\nAt the rally, Mahomes, who was selected MVP for the NFL season and for the Super Bowl, lauded the Chiefs fans and said the future hold more big wins.\r\n\r\n“This is just the beginning. We ain’t done yet,” Mahomes told the massive crowd in front of Union Station. “So I’ll make sure to hit y’all back next year, and I hope the crowd’s the same.”\r\n\r\nFor the Chiefs’ last Super Bowl win in 2020, it was estimated that between 800,000 and 1 million fans lined the streets to celebrate and early indications showed that number was likely to be matched.', 10),
(113, 'Tennis ', '230220104616-01-carlos-alcaraz-021923.webp', 'Carlos Alcaraz wins Argentina Open after three-month injury layoff', 'sport', 'beyond-the-white-line', '2023-02-24 15:30:03', 'CNN\r\n — \r\nCarlos Alcaraz capped off a stunning return from injury as he defeated Cameron Norris 6-3 7-5 to win the Argentina Open on Sunday.\r\n\r\nPrior to last week, last year’s US Open champion had been out of action for more than three months as he recovered from hamstring and abdominal injuries.\r\n\r\nBut the 19-year-old, ranked second in the world behind Novak Djokovic, made a seamless return to competitive tennis in Buenos Aires, dropping only one set during the course of the tournament.\r\n\r\nAgainst Great Britain’s Norrie, Alcaraz took control of the contest by winning seven straight games between the end of the first set and start of the second.\r\n\r\nHe failed to serve out for the match at 5-3 in the second set but wrapped up the victory three games later with a brilliant forehand drop shot.\r\n\r\n“It’s been a great week for me, a dream week after a long time with no competition. Coming to Buenos Aires and showing the level I showed is amazing and really special. It has been an emotional week, too,” Alcaraz said, according to Reuters.', 10),
(114, 'Analycs ', '230222223116-01-donald-trump-east-palestine-oh-visit-022223.webp', 'Ohio’s toxic spill is unleashing poisonous, partisan politics', 'news', 'news', '2023-02-24 15:32:19', 'CNN\r\n — \r\nThe people of East Palestine, Ohio, just want help, truth and accountability after a freight train wreck smothered their town with a toxic cloud and left them afraid to drink the water.\r\n\r\n“I don’t feel safe, because I don’t know what the future holds for my town,” said lifelong East Palestine resident Jessica Conard during a Wednesday evening CNN town hall. Her comment encapsulated a remarkable and pervasive feeling of mistrust among residents toward assurances by state and federal officials that their air and water are safe.\r\n\r\n“This has the potential to really decimate a small town like us,” Conard added.\r\n\r\nA massive clean-up is underway, officials are testing local water systems, wells, streams and creeks, and multiple investigations are beginning.', 10),
(115, 'TRAVEL ', '230221111333-02-body-woman-lives-on-italian-prison-island.webp', 'Alcatraz of Tyrrhenian Sea', 'world', 'featured-sections', '2023-02-24 15:33:53', 'Situated close to Gorgona, another Italian prison island, Pianosa was set up during the 1700s to confine outlaws, bandits and revolutionaries.\r\n\r\nThe island served as the base for a maximum security prison up until 1998, when the prison was shut down. Its few residents eventually departed and Pianosa was left deserted for many years.\r\n\r\nVisitors were not permitted on the island until relatively recently, and those who do visit can only come as part of an organized boat tour that must be booked via specific tour operators.\r\n\r\nIn order to be admitted onto the rehabilitation program at Hotel Milena, applicants must have already served at least one-third of their sentence in jail and undergone a series of strict psychological and social evaluation tests.\r\n\r\nOver the past 12 years, Manca has dealt with around a hundred offenders on probation for a multitude of crimes, including murder.\r\n\r\nAlthough she notes that many of the inmates have been convicted for far more than “stealing daisies,” Manca has always felt comfortable on the island and considers it to be something of a safe harbor.', 10);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `email`, `password`) VALUES
(3, 'kabashielvir1@gmail.com', '123123123');

-- --------------------------------------------------------

--
-- Structure for view `dateformat`
--
DROP TABLE IF EXISTS `dateformat`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `dateformat`  AS SELECT date_format(`news`.`date`,'%d %M, %Y') AS `dateFormat` FROM `news` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutus`
--
ALTER TABLE `aboutus`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `fk_news_admin` (`admin`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aboutus`
--
ALTER TABLE `aboutus`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `fk_news_admin` FOREIGN KEY (`admin`) REFERENCES `admin` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
