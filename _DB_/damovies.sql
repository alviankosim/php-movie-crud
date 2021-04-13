-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 13, 2021 at 04:07 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `damovies`
--

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `id` int(32) NOT NULL,
  `title` varchar(250) NOT NULL,
  `description` text NOT NULL,
  `image_link` varchar(250) NOT NULL,
  `trailer_link` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`id`, `title`, `description`, `image_link`, `trailer_link`) VALUES
(1, 'Avengers Endgame', 'Twenty-three days after Thanos killed half of all life in the universe,[N 1] Carol Danvers rescues Tony Stark and Nebula from deep space and they reunite with the remaining Avengers—Bruce Banner, Steve Rogers, Thor, Natasha Romanoff, and James Rhodes—and Rocket on Earth. Locating Thanos on an uninhabited planet, they plan to use the Infinity Stones to reverse his actions, but discover Thanos has already destroyed them to prevent further use. Enraged, Thor decapitates Thanos.\r\n\r\nFive years later, in 2023, Scott Lang escapes from the quantum realm.[N 2] Reaching the Avengers\' compound, he explains that he experienced only five hours while trapped. Theorizing the quantum realm allows time travel, they ask Stark to help them get the Stones from the past to reverse Thanos\'s actions in the present. Stark, Rocket, and Banner, who has since merged his intelligence with the Hulk\'s strength, build a time machine. Banner notes that changing the past does not affect their present; any changes create alternate realities. Visiting the Asgardian refugees\' settlement New Asgard, in Norway, Banner and Rocket recruit an overweight and despondent Thor. In Tokyo, Romanoff recruits Clint Barton, who had become a vigilante after the death of his family.\r\n\r\nBanner, Lang, Rogers, and Stark travel to New York City during Loki\'s attack in 2012.[N 3] At the Sanctum Sanctorum, Banner convinces the Ancient One to give him the Time Stone by promising to return the various Stones to their proper points in time. At Stark Tower, Rogers retrieves the Mind Stone from Hydra sleeper agents, but Stark and Lang\'s attempt to steal the Space Stone fails, allowing 2012-Loki to escape with it. Rogers and Stark travel to the S.H.I.E.L.D. headquarters in 1970, where Stark obtains an earlier version of the Space Stone and encounters his father, Howard. Rogers steals Pym Particles from Hank Pym to return to the present and spies his lost love, Peggy Carter.\r\n\r\nMeanwhile, Rocket and Thor travel to Asgard in 2013;[N 4] the former extracts the Reality Stone from Jane Foster, while the latter gets encouragement from his mother, Frigga, and retrieves his old hammer, Mjolnir. Barton, Romanoff, Nebula, and Rhodes travel to 2014; Nebula and Rhodes go to Morag and steal the Power Stone before Peter Quill can,[N 5] while Barton and Romanoff travel to Vormir. The Soul Stone\'s keeper, Red Skull, reveals it can only be acquired by sacrificing a loved one. Romanoff sacrifices herself, allowing Barton to get the Stone. Rhodes and Nebula attempt to return to their own time, but Nebula is incapacitated when her cybernetic implants link with her past self, allowing 2014-Thanos to learn of his future self\'s success and the Avengers\' attempt to undo it. 2014-Thanos sends 2014-Nebula forward in time to prepare for his arrival.\r\n\r\nReuniting in the present, the Avengers place the Stones into a gauntlet that Stark, Banner, and Rocket built. Banner, having the most resistance to their radiation, wields the gauntlet and reverses Thanos\'s disintegrations. Meanwhile, 2014-Nebula, impersonating her future self, uses the time machine to transport 2014-Thanos and his warship to the present, destroying the Avengers\' compound in the process. Present-day Nebula convinces 2014-Gamora to betray Thanos, but is unable to convince 2014-Nebula and kills her. Thanos overpowers Stark, Thor, and a Mjolnir-wielding Rogers and summons his army to retrieve the Stones, intent on using them to destroy the universe and create a new one. A restored Stephen Strange arrives with other sorcerers, the restored Avengers and Guardians of the Galaxy, the Ravagers, and the armies of Wakanda and Asgard to fight Thanos\'s army. Danvers also shows up and destroys Thanos\'s warship, but Thanos overpowers her and seizes the gauntlet. Stark grabs the Stones and uses them to disintegrate Thanos and his army, but the strain of using the Stones kills him.\r\n\r\nFollowing Stark\'s funeral, Thor appoints Valkyrie as the new ruler of New Asgard and joins the Guardians. Rogers returns the Stones and Mjolnir to their proper timelines and remains in the past to live with Carter. In the present, an elderly Rogers passes his shield to Sam Wilson.', 'https://upload.wikimedia.org/wikipedia/en/0/0d/Avengers_Endgame_poster.jpg', 'https://www.youtube.com/watch?v=TcMBFSGVi1c'),
(2, 'Zack Snyder\'s Justice League', 'Thousands of years ago, Darkseid and his Parademons attempted to conquer Earth using the Mother Boxes after learning that Earth harbored the Anti-Life Equation. The attempt was foiled by a unified alliance of Old Gods, Amazons, Atlanteans, humanity, and a Green Lantern. After the battle, the Boxes were hidden in different locations, guarded by the Amazons, Atlanteans, and Humanity, respectively. In the present, Superman\'s death[b] triggers the Boxes\' reactivation, attracting Steppenwolf, Darkseid\'s disgraced lieutenant, to Earth. Steppenwolf aims to regain Darkseid\'s favor by gathering the boxes to form \"the Unity,\" which would terraform Earth in the likeness of their world Apokolips.\r\n\r\nSteppenwolf retrieves a Mother Box from Themyscira, prompting Queen Hippolyta to warn her daughter Diana Prince. Diana receives the message and learns of the events related to Darkseid and Steppenwolf. She informs Bruce Wayne. Bruce and Diana seek to form a team of metahumans to protect Earth. Bruce locates Arthur Curry and Barry Allen, while Diana locates Victor Stone. Barry joins immediately, while Arthur and Victor refuse. However, Victor joins after his father Silas and several other S.T.A.R. Labs employees are kidnapped by Parademons seeking the humans\' Mother Box. Steppenwolf attacks an Atlantean outpost to retrieve their Box, forcing Arthur into action.\r\n\r\nThe team receives intel from Gotham City Police Commissioner James Gordon, leading them to Steppenwolf\'s army in an abandoned facility under Gotham Harbor. Although the group rescues the kidnapped employees, the facility is flooded during combat, trapping the team until Arthur helps delay the flood so they can escape. Victor retrieves the last Mother Box, which he had hidden, for the group to analyze. Victor reveals that Silas used the Box to rebuild his body after a car accident and that the Boxes are \"change machines\" that unfalteringly enforce the will of their master, destroying or restoring to life without bias. The group decides to use the Box to resurrect Superman to help fight Steppenwolf. Barry and Victor exhume Superman\'s body and place it in the amniotic fluid of the genesis chamber in a Kryptonian ship[c] kept in S.T.A.R. Labs. After Barry activates the Mother Box, an amnesiac Superman is resurrected, immediately attacking the group after Victor\'s cybernetics target him in self-defense. Lois Lane arrives just in time to calm Superman, preventing him from killing Bruce. Together, Lois and Superman leave for his family home in Smallville, where he regains his memories and reunites with his mother, Martha.\r\n\r\nSteppenwolf attacks S.T.A.R. Labs and retrieves the last Mother Box, though Silas manages to supercharge the Box with laser heat at the cost of his own life, allowing Victor to track it by tracing the heat. Without Superman, the five heroes travel to where Steppenwolf aims to unite the Boxes. The team fights their way through the Parademons to reach the Boxes but cannot distract Steppenwolf enough for Victor to separate them. Superman arrives and overpowers Steppenwolf, but the Boxes merge to form the Unity, causing a massive explosion. Barry enters the Speed Force and reverses time, allowing Superman and Victor to separate the Boxes. The heroes kill Steppenwolf and toss his body through a portal to Apokolips. Still, Darkseid assures his servant DeSaad he will return to Earth with their fleet to complete his quest for the Anti-Life Equation.\r\n\r\nAfter the battle, Bruce, Diana, and Alfred Pennyworth agree to set up a base of operations at the former Wayne Manor. As the team establishes, Diana receives another message from the Amazons, Barry acquires a job in Central City\'s police department which impresses his father Henry, Victor is inspired by a message from his father to use his abilities for good, Arthur bids farewell to Mera, and his mentor Nuidis Vulko as he goes to see his father,[d] and Superman resumes his life as reporter Clark Kent and as protector of Earth.\r\n\r\nLex Luthor, who escaped from Arkham Asylum, is visited by Slade Wilson, to whom Luthor reveals Batman\'s secret identity. After having a vision involving Victor, Barry, Mera, Wilson, the Joker, and an evil Superman in a post-apocalyptic world,[e] Bruce receives a visit from the Martian Manhunter, who previously visited Lois disguised as Martha. He thanks Bruce for assembling the team before saying they will be in contact in preparation for Darkseid\'s next plans.', 'https://upload.wikimedia.org/wikipedia/en/6/60/Zack_Snyder%27s_Justice_League.png', 'https://www.youtube.com/watch?v=ZrdQSAX2kyw'),
(3, 'Black Widow', 'NOT RELEASED YET', 'https://upload.wikimedia.org/wikipedia/en/7/74/Black_Widow_poster.jpg', 'https://www.youtube.com/watch?v=ybji16u608U'),
(4, 'Joker', 'In 1981, party clown and aspiring stand-up comedian Arthur Fleck lives with his mother, Penny, in Gotham City. Gotham is rife with crime and unemployment, leaving swaths of the population disenfranchised and impoverished. Arthur suffers from a medical disorder that causes him to laugh at inappropriate times, depending on social services for medication. After a gang of delinquents attacks Arthur in an alley, his co-worker Randall gives him a gun for protection. Arthur pursues a relationship with his neighbor, single mother Sophie Dumond, and invites her to his upcoming stand-up routine at a nightclub.\r\n\r\nWhile entertaining at a children\'s hospital, Arthur\'s gun falls out of his pocket. Randall lies that Arthur bought the gun himself, and Arthur is fired. On the subway, still in his clown makeup, Arthur is beaten by three drunken Wayne Enterprises businessmen; he shoots two in self-defense and wounds the third before pursuing him off the train and executing him on the stairs. The killings are condemned by billionaire mayoral candidate Thomas Wayne, who calls those envious of more successful people \"clowns\". Demonstrations against Gotham\'s rich begin, with protesters donning clown masks in Arthur\'s image. Funding cuts shut down the social service program, leaving Arthur without his medication.\r\n\r\nSophie attends Arthur\'s stand-up routine, which goes poorly; he laughs uncontrollably and has difficulty delivering his jokes. Arthur\'s idol, popular talk show host, Murray Franklin, mocks Arthur by showing clips from the comedy routine on his show. Arthur intercepts a letter written by Penny to Thomas, alleging that he is Thomas\'s illegitimate son, and berates his mother for hiding the truth. Arthur goes to Wayne Manor, where he meets Thomas\'s young son Bruce, but flees after a scuffle with the family butler Alfred Pennyworth. Following a visit from two Gotham City Police Department detectives investigating Arthur\'s involvement in the train murders, Penny suffers a stroke and is hospitalized.\r\n\r\nArthur sneaks into a private viewing event presenting the Charlie Chaplin film Modern Times and confronts Thomas, who tells him that Penny is delusional and not his biological mother. In denial, Arthur visits Arkham State Hospital and steals Penny\'s case file; the file says Penny adopted Arthur as a baby and allowed her abusive boyfriend to harm them both. However, Penny claims that Thomas used his influence to fabricate the adoption to hide their affair. Distraught, Arthur returns home and enters Sophie\'s apartment unannounced. Frightened, Sophie tells him to leave; their relationship was merely a figment of Arthur\'s imagination. The following day, Arthur kills Penny at the hospital.\r\n\r\nArthur is invited to appear on Murray\'s show due to the unexpected popularity of his comedy routine\'s clips. As he prepares, Arthur is visited by Randall and fellow ex-colleague Gary. Thereupon Arthur murders Randall, but spares Gary for treating him well in the past. En route to the studio, Arthur is pursued by the two detectives onto a train filled with clown protesters. One detective accidentally shoots a protester and incites a riot, allowing Arthur to escape; the rioters brutally beat the detectives as Arthur leaves.\r\n\r\nBefore the show goes live, Arthur requests that Murray introduce him as Joker – a reference to Murray\'s previous mockery. Arthur walks out to applause, but starts telling morbid jokes, confesses to the train murders, rants about how society abandons the downtrodden and mentally ill, and berates Murray for mocking him on the previous segment. When Murray criticizes him and threatens to call the police, Arthur murders him in cold blood on live television. He is arrested for murder as riots break out across Gotham. One of the rioters corners the Wayne family in an alley and murders Thomas and his wife, Martha, sparing Bruce.[a] Rioters in an ambulance crash into the police car carrying Arthur, freeing him; he stands atop the car, dances to the cheers of the crowd, and smears blood on his face in the form of a smile.\r\n\r\nAt Arkham, Arthur laughs to himself about a joke and tells his psychiatrist she would not understand it. He runs from an orderly, leaving behind a trail of bloodied footprints.', 'https://upload.wikimedia.org/wikipedia/en/e/e1/Joker_%282019_film%29_poster.jpg', 'https://www.youtube.com/watch?v=zAGVQLHvwOY'),
(5, 'The SpongeBob Movie: Sponge on the Run', 'In Bikini Bottom, Plankton works on a new plan to steal the Krabby Patty formula while Karen argues that SpongeBob is actually responsible for all his previous failures and not Mr. Krabs. That same night, Plankton sneaks into the Krusty Krab and scans a Krabby Patty to print the formula but SpongeBob inadvertently causes Plankton to fall into a deep fryer and lose the formula while the latter was searching for his keys. This leads Plankton to understand that Karen was right in her suspicions.\r\n\r\nMeanwhile, in Atlantic City, selfish ruler King Poseidon has just used up all the slime from his latest sea snail, which is necessary to keep him rejuvenated. Since sea snails are almost extinct, Poseidon decrees the obtaining of a new snail. Plankton finds out about this and kidnaps SpongeBob\'s pet snail Gary so that SpongeBob will go to find him and thus not interfere with his plans. The next morning, SpongeBob learns from Patrick that Gary was taken to Atlantic City. However, Plankton offers Otto, a robot built by Sandy, to take them to the city and never return. Without SpongeBob cooking Krabby Patties, the Krusty Krab\'s enraged customers trash the restaurant despite Mr. Krabs and Squidward\'s efforts to stop them. Otto drives SpongeBob and Patrick to an old Western town where they meet a tumbleweed spirit named Sage.\r\n\r\nSage reveals that they are in a dream and must overcome a special mission to continue their search. He gives them a \"Challenge Coin\" that will embrave them into a tavern haunted by ghostly zombie pirates. Following a small musical number with Snoop Dogg, SpongeBob and Patrick discover that the pirates\' souls are trapped by an evil spirit known as \"El Diablo\" and their mission is to free them. El Diablo traps the duo in his office, but they accidentally disintegrate him with the sunlight by uncovering some window curtains. The pirates\' souls are freed and SpongeBob and Patrick continue on their travel until Otto wakes them up, thus revealing that everything was a dream.\r\n\r\nNow accompanied by Sage, SpongeBob discovers that Poseidon is using Gary\'s slime to stay young and as soon as it runs out, he will have him enslaved with the rest of his previous dried snails. Arriving at Atlantic City, Sage warns the pair not to be distracted by the city\'s attractions, which they ignore. After a fun-filled night, SpongeBob and Patrick discover that they have lost the \"Challenge Coin\" that allowed them to be brave, but they still reach into Poseidon\'s palace. When they try to take Gary back home to Bikini Bottom, both are arrested and imprisoned. Back in Bikini Bottom, Plankton arrives at the Krusty Krab and a depressed Mr. Krabs gives him the formula because nothing is the same without SpongeBob. However, seeing Mr. Krabs so upset makes Plankton feel incredibly guilty about what he has done. Upon finding out that SpongeBob and Patrick will be executed in a luxury show in Poseidon’s Palace, Mr. Krabs, Squidward, Sandy and a redeemed Plankton decide to go find and save them.\r\n\r\nIn prison, Sage reveals to SpongeBob and Patrick that the \"Challenge Coin\" never had powers and that the bravery came from themselves. When SpongeBob is about to be executed because Patrick had made a deal with Poseidon\'s Chancellor to save himself, Mr. Krabs, Squidward, Plankton and Sandy burst into the show to testify in favor of SpongeBob. Along with Patrick, each recounts an experience they had in their childhood with SpongeBob when they were at a summer camp, as well as how important SpongeBob is to all of them, which earns the audience\'s gratitude. Afterwards, the group perform a musical number to distract Poseidon and take Gary away. Poseidon realizes the distraction and orders his guards to capture the group. SpongeBob and his friends manage to sneak around the palace to the exit, but are once again cornered when Otto leaves them behind.\r\n\r\nPoseidon confronts them but gleefully orders the charges dropped for amusing him. However, he also does it on the condition that SpongeBob gives Gary to him and never come back for him. Remembering Sage\'s words, SpongeBob gains courage and refuses, arguing that his friends went out of their way to help him in the rescue, even when Poseidon threatens to kill them all. However, when Poseidon finds out that he has no friends and reveals that he needs the slime for his appearance, SpongeBob offers to be his friend and tells him that beauty is on the inside and that he doesn\'t need to hide it. This causes Poseidon to remove all his arrangements and returns to his true appearance. Everyone accepts him for who he is and Poseidon allows SpongeBob to take Gary back home.\r\n\r\nOtto drives the group back home while Poseidon releases all his enslaved snails to accompany them and Bikini Bottom ends up becoming a \"sea snail refuge\".', 'https://upload.wikimedia.org/wikipedia/en/3/34/The_SpongeBob_Movie_-_Sponge_on_the_Run.png', 'https://www.youtube.com/watch?v=HfiH_526qhY'),
(6, 'WandaVision', 'Three weeks after the events of Avengers: Endgame (2019),[1] Wanda Maximoff and Vision are living an idyllic suburban life in the town of Westview, New Jersey, trying to conceal their true natures. As their surroundings begin to move through different decades and they encounter various television tropes, the couple suspects that things are not as they seem.[2]', 'https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcRa0Z8hMzYCH1lG-6Uk5uppTii_Xt8SWlQNGYsex9__r2W4bTYh', 'https://www.youtube.com/watch?v=sj9J2ecsSpo');

-- --------------------------------------------------------

--
-- Table structure for table `movie_stars`
--

CREATE TABLE `movie_stars` (
  `id` int(32) NOT NULL,
  `movie_id` int(32) NOT NULL,
  `user_id` int(32) NOT NULL,
  `stars` int(2) NOT NULL,
  `review` varchar(100) NOT NULL,
  `created_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movie_stars`
--

INSERT INTO `movie_stars` (`id`, `movie_id`, `user_id`, `stars`, `review`, `created_date`) VALUES
(1, 1, 2, 5, 'Great movie!', '0000-00-00 00:00:00'),
(2, 1, 6, 4, 'Everyhing is good except the ending. I hate to see Tony Stark died :(', '2021-04-13 00:49:56'),
(3, 2, 2, 5, 'I love this version of justice league! I\'m ready for the sequel\r\n#RESTORETHESNYDERVERSE', '2021-04-13 07:37:33'),
(4, 1, 7, 1, 'Hey guys, don\'t put the spoiler here :(', '2021-04-13 08:53:29');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(32) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(250) NOT NULL,
  `created_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `created_date`) VALUES
(1, 'admin', '9a4843fccb863882e4c8e3604216ffee', '2021-04-11 20:29:06'),
(2, 'alviankosim', '9166e5f521390722ea656a77fda63c7a', '2021-04-12 07:12:01'),
(6, 'kosim', '9166e5f521390722ea656a77fda63c7a', '2021-04-12 10:42:12'),
(7, 'test', '9166e5f521390722ea656a77fda63c7a', '2021-04-12 10:45:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movie_stars`
--
ALTER TABLE `movie_stars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `movie`
--
ALTER TABLE `movie`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `movie_stars`
--
ALTER TABLE `movie_stars`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
