-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2024 at 11:26 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bmb`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `b_id` int(11) NOT NULL,
  `s_id` int(11) DEFAULT NULL,
  `bname` varchar(255) NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `author` varchar(100) DEFAULT NULL,
  `publisher` varchar(100) DEFAULT NULL,
  `quantity_available` int(11) DEFAULT 0,
  `description` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `is_rented` tinyint(1) DEFAULT 0,
  `is_in_cart` tinyint(1) DEFAULT 0,
  `is_in_wishlist` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`b_id`, `s_id`, `bname`, `image_path`, `author`, `publisher`, `quantity_available`, `description`, `created_at`, `is_rented`, `is_in_cart`, `is_in_wishlist`) VALUES
(2, 1, 'Goodnight Moon', '/path/to/upload/directory/1707918913_e8b546572f5245df23aa.png', ' Margaret Wise Brown', 'HarperFestival', 4, 'This book is good for 0 to 2 years children. Small stories are present..', '2024-02-14 13:56:15', 1, 1, 0),
(3, 1, 'Brown Bear, Brown Bear, What Do You See?', 'images/0to2y2.PNG', 'Bill Martin Jr. and Eric Carle', 'Henry Holt and Co.', 10, 'This repetitive and rhythmic book introduces children to different animals and colors. The vibrant illustrations by Eric Carle engage young readers and listeners, making it a delightful learning experience.', '2024-03-24 11:26:27', 1, 1, 0),
(4, 1, 'The Very Hungry Caterpillar', 'images/0to2-3.PNG', 'Eric Carle', 'Philomel Books', 9, 'In this beloved classic, children follow the journey of a hungry caterpillar as it eats its way through various foods before transforming into a beautiful butterfly. The book teaches counting, days of the week, and the concept of metamorphosis.', '2024-02-05 00:44:30', 1, 1, 0),
(5, 1, 'The Snowy Day', 'images/0to2-4.PNG', ' Ezra Jack Keats', 'Viking Books for Young Readers', 9, 'Follow Peter on his adventure in the first snowfall. \"The Snowy Day\" is a classic that captures the wonder and joy of a child\'s experience with snow, highlighting the simple pleasures of winter through beautiful illustrations and a heartwarming story.', '2024-02-05 08:04:55', 1, 0, 0),
(6, 2, 'The Very Busy Spider', 'images/3to6y1.PNG', 'Eric Carle', 'Philomel Books', 9, 'In this classic by Eric Carle, follow the journey of a very busy spider as it weaves its web. The book features tactile elements for little fingers to explore and introduces various animals the spider encounters...', '2024-02-24 07:21:03', 1, 0, 0),
(7, 2, 'Chicka Chicka Boom Boom', 'images/3to6y2.PNG', 'Bill Martin Jr. and John Archambault', 'Simon & Schuster Books for Young Readers', 9, 'This rhythmic and engaging alphabet book features colorful illustrations by Lois Ehlert. Watch the lowercase letters race to the top of the coconut tree, teaching young readers about the alphabet in a fun and memorable way.', '2024-02-05 08:07:33', 1, 1, 0),
(8, 2, 'We\'re All Wonders\" by R.J. Palacio', 'images/3to6y3.PNG', 'R.J. Palacio', 'Alfred A. Knopf Books for Young Readers', 9, 'Inspired by Palacio\'s bestselling novel \"Wonder,\" this picture book introduces young readers to Auggie, a boy with a facial deformity, and encourages acceptance and empathy. The story emphasizes the importance of kindness and looking beyond appearances.', '2024-02-05 08:09:01', 1, 0, 0),
(9, 2, 'Giraffes Can\'t Dance', 'images/3to6y4.PNG', 'Giles Andreae', ' Orchard Books', 9, 'Gerald the giraffe longs to dance, but with crooked knees and thin legs, everyone laughs at him. However, with the help of a wise cricket, Gerald discovers that he has his own unique way of dancing. The book celebrates individuality and self-acceptance.', '2024-02-05 08:10:01', 1, 0, 0),
(10, 3, 'Charlotte\'s Web', 'images/6to8y1.PNG', 'E.B. White', 'HarperCollins', 9, 'Join Wilbur the pig and his friend Charlotte the spider in this timeless classic. E.B. White\'s beautifully written story explores friendship, loyalty, and the power of words. The book has been beloved by generations for its heartwarming tale and memorable characters.', '2024-02-08 01:11:13', 1, 1, 0),
(11, 1, 'Matilda', 'images/6to8y2.PNG', ' Roald Dahl', 'Puffin Books', 10, 'Follow the extraordinary story of Matilda, a little girl with a love for books and a unique set of talents. Roald Dahl\'s humorous and imaginative storytelling makes \"Matilda\" a captivating read, celebrating the power of intelligence and kindness.', '2024-02-08 01:13:00', 0, 0, 0),
(12, 3, 'The Magic Tree House Series', 'images/6to8y3.PNG', 'Mary Pope Osborne', 'Random House Books for Young Readers', 4, 'This series follows siblings Jack and Annie as they discover a magical treehouse filled with books that transport them through time and space. Each book in the series takes them on exciting adventures while providing educational elements.', '2024-02-08 01:14:16', 1, 0, 0),
(13, 3, 'The BFG', 'images/6to8y4.PNG', 'Roald Dahl', 'Puffin Books', 15, 'In \"The BFG\" (Big Friendly Giant), join young Sophie and the gentle giant as they embark on a quest to stop the more fearsome giants from eating children. Roald Dahl\'s whimsical language and Quentin Blake\'s illustrations make this story a delightful and imaginative experience.', '2024-02-08 01:15:19', 0, 0, 0),
(14, 4, 'Harry Potter and the Sorcerer\'s Stone', 'images/9to12y1.PNG', 'J.K. Rowling', 'Scholastic', 9, 'The first book in the iconic \"Harry Potter\" series introduces readers to the magical world of Hogwarts. Follow Harry Potter as he discovers his true identity and begins his journey as a wizard, encountering friendship, mystery, and adventure.', '2024-02-08 01:20:39', 1, 0, 0),
(15, 4, 'Percy Jackson & the Olympians', 'images/9to12y2.PNG', 'Rick Riordan', 'Disney Hyperion', 9, 'Join Percy Jackson, a demigod and the son of Poseidon, as he embarks on a quest to prevent a war among the gods. Rick Riordan\'s modern take on Greek mythology is filled with humor, action, and lessons about bravery and friendship.', '2024-02-08 01:21:43', 1, 0, 0),
(16, 4, 'The Chronicles of Narnia: The Lion, the Witch and the Wardrobe', 'images/9to12y3.PNG', 'C.S. Lewis', 'HarperCollins', 9, 'Step into the enchanted land of Narnia with the Pevensie siblings. In this classic tale, they join forces with Aslan, the great lion, to overthrow the White Witch and bring peace to the magical world. C.S. Lewis\'s imaginative storytelling captivates readers of all ages.', '2024-02-08 01:22:51', 1, 0, 0),
(17, 4, 'Wonder', 'images/9to12y4.PNG', 'R.J. Palacio', 'Alfred A. Knopf', 9, 'Wonder\" follows the life of Auggie Pullman, a fifth-grader with a facial deformity, as he navigates the challenges of attending a mainstream school. The book explores themes of empathy, kindness, and the impact of small acts of courage.', '2024-02-08 01:23:52', 1, 0, 0),
(19, 5, 'Adventure Awaits: Outdoor Exploration Activity Book', '/path/to/upload/directory/1709370155_2b090e546f0050d00237.png', 'Max Woods', 'Explore More Press', 9, '\"Adventure Awaits\" is an interactive activity book that encourages kids to explore the great outdoors. From scavenger hunts and nature journaling prompts to outdoor games and DIY crafts, this book provides endless opportunities for outdoor adventure and learning. With colorful illustrations and fun facts about plants, animals, and ecosystems, children will discover the wonders of nature while having fun outside.', '2024-03-02 09:02:35', 1, 1, 0),
(20, 5, 'Code Crackers: The Ultimate Puzzle Challenge', '/path/to/upload/directory/1709371760_b1400d290a2258d6e521.png', ' Emma Johnson', 'Code Breaker Books', 10, 'Dive into the world of secret codes and puzzles with \"Code Crackers.\" This book is packed with cryptic messages, hidden clues, and challenging ciphers for aspiring young detectives to decipher. From Morse code to binary, children will learn the basics of coding while unraveling exciting mysteries and solving thrilling puzzles. With each solved code, they\'ll unlock the next level of adventure!', '2024-03-02 09:29:20', 0, 1, 0),
(21, 5, 'Art Explorer: Creative Crafts and Activities for Budding Artists', 'images/ActivityAndP3.PNG', 'Mia Turner', 'Artistic Adventures Publishing', 10, 'Unleash your inner artist with \"Art Explorer,\" a hands-on activity book for kids who love to create. From drawing and painting to sculpture and mixed media, this book features a variety of art projects and techniques for young aspiring artists to explore. With step-by-step instructions and inspiring examples, children can unleash their creativity and express themselves through art in new and exciting ways.', '2024-03-02 04:01:41', 0, 1, 0),
(22, 5, 'Robot Rampage: STEM Activity Book for Tech-Savvy Kids', 'images/ActivityAndP.PNG', 'Lucas Smith', 'TechTastic Publications', 10, '\"Robot Rampage\" is a STEM-focused activity book that introduces kids to the world of robotics and engineering. Packed with hands-on experiments, coding challenges, and robot-building projects, this book encourages children to explore technology in a fun and interactive way. From building a cardboard robot to programming a mini robot rover, young tech enthusiasts will learn valuable STEM skills while embarking on exciting robotic adventures.', '2024-03-02 04:02:55', 0, 0, 0),
(23, 6, 'Super Squad Adventures: Heroes Unite!', 'images/Comic1.PNG', 'Sam Roberts', ' Comic Kids Press', 10, 'Join the Super Squad on their thrilling adventures as they battle villains and save the day in \"Super Squad Adventures: Heroes Unite!\" Filled with action-packed comic strips featuring colorful characters and exciting storylines, this comic book is perfect for young readers who love superheroes. With dynamic illustrations and empowering messages, each page encourages bravery, teamwork, and doing what\'s right.', '2024-03-02 04:04:17', 0, 0, 0),
(24, 6, 'Cosmic Capers: Space Adventures with Captain Cosmo', 'images/Comic2.PNG', 'Jenny Green', ' Cosmic Comics Co.', 10, 'Blast off into outer space with \"Cosmic Capers,\" a comic book series starring Captain Cosmo and his intrepid crew. From daring space missions to encounters with alien civilizations, each comic strip takes readers on an intergalactic journey filled with excitement and wonder. With vibrant artwork and imaginative storytelling, this series sparks curiosity about the cosmos and inspires a sense of adventure.', '2024-03-02 04:05:19', 0, 0, 0),
(25, 6, 'Robo Rangers: Tech Tales of Tomorrow', 'images/Comic3.PNG', 'Max Turner', 'Robot Comics Inc.', 10, 'Enter a futuristic world of robots and technology in \"Robo Rangers,\" a comic book series that follows a team of robotic heroes on their high-tech adventures. From battling rogue AI to exploring virtual realities, each comic strip explores themes of innovation, teamwork, and ethics in technology. With sleek designs and futuristic settings, this series captivates young readers and sparks their imagination about the possibilities of tomorrow\'s technology.', '2024-03-02 04:07:32', 0, 0, 0),
(26, 6, 'Wildlife Warriors: Guardians of the Animal Kingdom', 'images/Comic4.PNG', 'Leo Woods', 'Nature Comics Publishing', 10, '\"Wildlife Warriors\" follows the adventures of a group of young conservationists as they protect endangered animals and habitats around the world. Through captivating comic panels and compelling narratives, readers will learn about wildlife conservation, biodiversity, and the importance of preserving our natural world. With engaging characters and stunning illustrations of exotic animals, this series educates and inspires young environmentalists.', '2024-03-02 04:08:50', 0, 0, 0),
(27, 8, 'Mythical Mornings: Adventures in Ancient Legends', 'images/KidsMythology1.PNG', 'Sophia Stone', 'Mythic Tales Press', 9, ' \"Mythical Mornings\" transports young readers into the captivating world of ancient mythology, where gods, goddesses, and mythical creatures come to life. From Greek and Roman myths to Norse and Egyptian legends, this book explores a variety of fascinating stories from different cultures. Through colorful illustrations and engaging storytelling, children will embark on epic adventures filled with heroes, monsters, and magical beings, sparking their imagination and curiosity about ancient civilizations.', '2024-03-02 04:21:31', 1, 1, 0),
(28, 8, 'Dawn of the Gods: Morning Myths from Around the World', 'images/KidsMythology2.PNG', 'Leo Larson', 'Sunrise Mythology Publishing', 10, '\"Dawn of the Gods\" introduces children to the rich tapestry of world mythology through a collection of enchanting stories inspired by different cultures. From the rising sun symbolizing creation to the dawn chorus representing divine voices, each myth explores the significance of mornings in ancient beliefs and traditions. With stunning artwork and captivating narratives, this book offers young readers a glimpse into the wonders of mythology and encourages an appreciation for diverse cultures.', '2024-03-02 04:22:41', 0, 1, 0),
(29, 8, 'Sunrise Legends: Mythological Adventures at Dawn', 'images/KidsMythology3.PNG', 'Maya Martinez', 'Mythical Adventures Books', 10, 'Embark on a mythical journey with \"Sunrise Legends\" as children discover the magical stories and creatures that inhabit the dawn. From the fiery phoenix to the elusive unicorn, each page is filled with mythical beings from different cultures around the world. Through captivating illustrations and engaging text, young readers will delve into the timeless tales of gods, heroes, and monsters, igniting their imagination and fostering a love for mythology.', '2024-03-02 04:23:42', 0, 1, 0),
(30, 8, 'Morning Mythology: Gods and Heroes Awaken', 'images/KidsMythology4.PNG', 'Ethan Ellis', 'Mythical Heroes Press', 10, '\"Morning Mythology\" invites children to explore the heroic deeds and divine adventures of ancient myths as they unfold in the early hours of the day. From Zeus hurling thunderbolts to Thor wielding his mighty hammer, each story is brought to life through vivid illustrations and accessible retellings. With a focus on courage, wisdom, and justice, this book inspires young readers to learn from the timeless lessons of mythology and discover the power of imagination.', '2024-03-02 04:24:57', 0, 0, 0),
(31, 9, 'Colors of the Rainbow: A Vibrant Picture Book', 'images/PictureBook1.PNG', 'Lily Roberts', 'Rainbow Books Publishing', 9, '\"Colors of the Rainbow\" is a delightful picture book that celebrates the beauty and diversity of colors. Through charming illustrations and simple text, young readers will journey through a world filled with vibrant hues, from the red of a ripe apple to the blue of a clear sky. With interactive elements that encourage children to identify colors and objects, this book provides a colorful and engaging learning experience for early readers.', '2024-03-02 04:26:48', 1, 1, 0),
(32, 9, 'The Adventures of Teddy Bear: A Cozy Picture Book', 'images/PictureBook2.PNG', 'Maxine Moore', 'Teddy Tales Publishing', 10, 'Join Teddy Bear on a heartwarming journey through a day filled with cuddles, hugs, and love in \"The Adventures of Teddy Bear.\" With soft, inviting illustrations and gentle rhymes, this picture book captures the magic of childhood and the bond between a child and their favorite toy. Perfect for bedtime or anytime snuggles, this book is sure to become a cherished favorite for young readers and their families.', '2024-03-02 04:27:51', 0, 0, 0),
(33, 9, 'Wonderful Wildlife: An Animal ABC Book', 'images/PictureBook3.PNG', 'Ethan Ellis', 'Nature\'s Wonders Press', 10, '\"Wonderful Wildlife\" introduces children to the amazing world of animals through an alphabet adventure. From Aardvarks to Zebras, each page features captivating illustrations and fascinating facts about different creatures. With engaging text and vibrant artwork, this book encourages early literacy skills and sparks curiosity about the natural world, making it the perfect introduction to the animal kingdom for young readers.', '2024-03-02 04:29:05', 0, 0, 0),
(34, 9, 'Magical Moments: A Fairy Tale Picture Book', 'images/PictureBook4.PNG', 'Maya Martinez', 'Enchanted Tales Publishing', 10, '\"Magical Moments\" invites children into a world of enchantment and wonder through timeless fairy tales and whimsical illustrations. From castles in the clouds to dragons in the forest, each story sparks the imagination and transports young readers to fantastical realms where anything is possible. With lyrical prose and dreamy artwork, this picture book inspires creativity and fosters a love for storytelling in children of all ages.', '2024-03-02 04:30:01', 0, 1, 0),
(35, 13, 'Percy Jackson & the Olympians: The Lightning Thief', 'images/Fantacy1.PNG', 'Rick Riordan', 'Disney Hyperion', 10, 'This is the first book in the Percy Jackson series, following the adventures of a young boy named Percy who discovers he is a demigod, the son of Poseidon. He embarks on a quest to prevent a war among the gods, encountering mythical creatures and gods of Olympus along the way.', '2024-03-02 08:10:50', 0, 0, 0),
(36, 13, 'Harry Potter and the Sorcerer\'s Stone', 'images/fantacy2.PNG', 'J.K. Rowling', 'Scholastic Inc.', 10, 'The first book in the iconic Harry Potter series, it follows the journey of a young wizard named Harry Potter as he discovers his magical heritage and begins his education at Hogwarts School of Witchcraft and Wizardry. Alongside his friends Ron and Hermione, Harry uncovers dark secrets and battles the dark wizard Voldemort.', '2024-03-02 08:11:44', 0, 0, 0),
(37, 13, 'The Name of the Wind', 'images/fantacy3.PNG', 'Patrick Rothfuss', 'DAW Books', 10, 'This is the first book in the Kingkiller Chronicle series. It tells the story of Kvothe, a legendary figure known for his magical prowess and his adventures. The book follows Kvothe as he recounts his early years growing up as a gifted young boy, his time at a magical university, and his encounters with dangerous forces in the world.', '2024-03-02 08:12:57', 0, 0, 0),
(38, 13, 'A Game of Thrones', 'images/fantacy4.PNG', 'George R.R. Martin', 'Bantam Spectra', 10, 'The first book in the epic fantasy series \"A Song of Ice and Fire,\" it introduces readers to the continent of Westeros and the noble families vying for control of the Iron Throne. With intricate political intrigue, complex characters, and a richly developed world, the story follows multiple perspectives as they navigate the treacherous game of thrones.', '2024-03-02 08:13:59', 0, 0, 0),
(39, 14, 'Young Adult Science Fiction', 'images/ScienceFiction1.PNG', 'The Hunger Games', 'Suzanne Collins', 10, 'Set in a dystopian future, \"The Hunger Games\" follows Katniss Everdeen as she volunteers to take her sister\'s place in a brutal televised competition where teenagers fight to the death. Katniss must navigate alliances, betrayals, and the oppressive government in a fight for survival and rebellion.', '2024-03-02 08:15:05', 0, 0, 0),
(40, 14, 'Ender\'s Game', 'images/ScieceFiction2.PNG', 'Orson Scott Card', 'Tor Books', 10, 'In a future where Earth is at war with an alien species, gifted children are trained at Battle School to become military commanders. Ender Wiggin, a young boy with unparalleled strategic genius, is enlisted into this program and must navigate complex simulations and interpersonal dynamics to save humanity.', '2024-03-02 08:16:18', 0, 0, 0),
(41, 14, 'Dune', 'images/ScienceFiction3.PNG', 'Frank Herbert', 'Chilton Books', 10, 'Set in a distant future where noble families vie for control of the desert planet Arrakis, \"Dune\" follows the young Paul Atreides as he becomes embroiled in political intrigue, religious prophecy, and the struggle for the most valuable substance in the universe, the spice melange.', '2024-03-02 08:17:17', 0, 0, 0),
(42, 14, 'Neuromancer', 'images/ScienceFiction4.PNG', 'William Gibson', 'Ace Books', 10, 'Considered a seminal work in the cyberpunk genre, \"Neuromancer\" follows Case, a washed-up computer hacker, who is hired for one last job by a mysterious employer. Set in a dystopian future where corporations wield immense power, Case navigates through a virtual landscape of artificial intelligence, cybernetic enhancements, and corporate espionage.', '2024-03-02 08:18:20', 0, 0, 0),
(43, 15, 'To All the Boys I\'ve Loved Before', 'images/R1.PNG', 'Jenny Han', 'Simon & Schuster Books for Young Readers', 10, 'Lara Jean Song Covey writes secret love letters to all her past crushes, never intending for them to be sent. However, when the letters mysteriously get mailed out, Lara Jean\'s love life takes an unexpected turn as she navigates the repercussions and discovers unexpected feelings for one of the recipients.', '2024-03-02 08:19:47', 0, 0, 0),
(44, 15, 'The Fault in Our Stars', 'images/R2.PNG', 'John Green', 'Dutton Books', 10, 'Hazel Grace Lancaster, a sixteen-year-old cancer patient, meets Augustus Waters, a fellow cancer survivor, at a support group. As they bond over their shared experiences and embark on a journey to meet Hazel\'s favorite author, they discover the beauty and complexity of life and love in the face of mortality.', '2024-03-02 08:20:56', 0, 0, 0),
(45, 15, 'Outlander', 'images/R3.PNG', 'Diana Gabaldon', 'Delacorte Press', 10, 'Claire Randall, a former World War II nurse, is mysteriously transported back in time to 18th-century Scotland. There, she encounters the dashing Scottish warrior Jamie Fraser, and as they navigate the dangers of the past together, they forge a passionate and enduring love that transcends time.', '2024-03-02 08:22:00', 0, 0, 0),
(46, 15, 'The Notebook', 'images/R4.PNG', 'Nicholas Sparks', 'Warner Books', 10, 'Set in post-World War II North Carolina, \"The Notebook\" follows the love story of Noah Calhoun and Allie Nelson, two young lovers from different social classes. Despite their differences and the obstacles that arise, their love persists over the years, enduring through separations, conflicts, and the passage of time.', '2024-03-02 08:23:32', 0, 0, 0),
(47, 16, 'One of Us Is Lying', 'images/MystryT1.PNG', 'Karen M. McManus', 'Delacorte Press', 10, 'When five high school students enter detention, only four come out alive. As suspicion falls on each of the survivors, they must uncover the truth behind their classmate\'s death and untangle a web of secrets, lies, and betrayals.', '2024-03-02 08:25:51', 0, 0, 0),
(48, 16, 'Truly Devious', 'images/MstryT2.PNG', 'Maureen Johnson', 'Katherine Tegen Books', 10, 'Stevie Bell, a true crime aficionado, enrolls at Ellingham Academy, a prestigious boarding school with a dark history of unsolved mysteries. Obsessed with solving the decades-old case of the founder\'s wife and daughter\'s disappearance, Stevie finds herself entangled in a present-day murder mystery with ties to the past.', '2024-03-02 08:26:42', 0, 0, 0),
(49, 16, 'Gone Girl', 'images/MystryT3.PNG', 'Gillian Flynn', 'Crown Publishing Group', 10, 'On their fifth wedding anniversary, Amy Dunne disappears, leaving behind signs of a struggle. As the investigation unfolds, suspicions turn towards her husband, Nick, whose seemingly perfect marriage begins to unravel, revealing secrets and lies that threaten to destroy everything.', '2024-03-02 08:27:32', 0, 0, 0),
(50, 16, 'The Girl with the Dragon Tattoo', 'images/MystryT4.PNG', 'Stieg Larsson', 'Norstedts Förlag', 10, 'Journalist Mikael Blomkvist and hacker Lisbeth Salander are unlikely allies brought together to solve the decades-old disappearance of Harriet Vanger, a member of one of Sweden\'s wealthiest families. As they delve deeper into the Vanger family\'s dark secrets, they uncover a sinister conspiracy with far-reaching implications.', '2024-03-02 08:28:36', 0, 0, 0),
(51, 17, 'The Hunger Games', 'images/D1.PNG', 'Suzanne Collins', 'Scholastic Press', 10, 'Set in a dystopian future, \"The Hunger Games\" follows Katniss Everdeen as she volunteers to take her sister\'s place in a brutal televised competition where teenagers fight to the death. Katniss must navigate alliances, betrayals, and the oppressive government in a fight for survival and rebellion.', '2024-03-02 08:30:42', 0, 0, 0),
(52, 17, 'Divergent', 'images/D2.PNG', 'Veronica Roth', 'Katherine Tegen Books', 10, 'In a society divided into factions based on personality traits, Beatrice Prior discovers she is Divergent, possessing qualities of multiple factions. As she uncovers secrets about her society\'s oppressive leaders, she must navigate danger and deception to protect herself and those she loves.', '2024-03-02 08:31:34', 0, 0, 0),
(53, 17, '1984', 'images/D3.PNG', 'George Orwell', 'Secker & Warburg', 10, 'Set in a totalitarian society ruled by the Party led by Big Brother, \"1984\" follows Winston Smith as he rebels against the oppressive regime\'s surveillance, propaganda, and thought control. Winston\'s quest for truth and freedom leads him into a dangerous game of resistance against the all-powerful Party.', '2024-03-02 08:32:27', 0, 0, 0),
(54, 17, 'Brave New World', 'images/D4.PNG', 'Aldous Huxley', 'Chatto & Windus', 10, 'In a genetically engineered society where citizens are assigned roles based on intelligence and bred for specific purposes, Bernard Marx questions the conformity and lack of individuality. His journey exposes the dark underbelly of a seemingly utopian world built on control, consumerism, and the suppression of human emotions.', '2024-03-02 08:33:19', 0, 0, 0),
(55, 18, 'The Night Circus', 'images/JandL1.PNG', 'Erin Morgenstern', 'Anchor Books', 10, '\"The Night Circus\" is a mesmerizing tale set in a mysterious and magical circus that arrives without warning. As two young illusionists, Celia and Marco, become bound in a dangerous game orchestrated by their mentors, their rivalry evolves into a passionate love affair. However, their destinies are entwined with the circus itself, leading to a breathtaking and enchanting story of love, sacrifice, and destiny.', '2024-03-02 11:21:28', 0, 0, 0),
(56, 18, 'A Gentleman in Moscow', 'images/JandL2.PNG', 'Amor Towles', ' Viking', 10, 'Set in Moscow in the early 1920s, \"A Gentleman in Moscow\" follows the story of Count Alexander Rostov, an aristocrat who is sentenced to house arrest in the grand Metropol Hotel. Despite his confined circumstances, Rostov finds unexpected friendships, purpose, and even love within the hotel\'s walls. Amor Towles crafts a charming and insightful narrative that explores resilience, human connection, and the power of a well-lived life.', '2024-03-02 11:22:41', 0, 0, 0),
(57, 18, 'The Goldfinch', 'images/JandL3.PNG', 'Donna Tartt', 'Little, Brown and Company', 10, '\"The Goldfinch\" is a sprawling novel that begins with a tragic event: a terrorist attack at the Metropolitan Museum of Art. Amidst the chaos, young Theo Decker steals a priceless painting, \"The Goldfinch,\" setting off a chain of events that shape his life for years to come. Donna Tartt\'s rich prose and intricate storytelling delve into themes of loss, art, and the complexities of human experience.', '2024-03-02 11:24:04', 0, 0, 0),
(58, 18, 'Normal People', 'images/JandL4.PNG', 'Sally Rooney', 'Hogarth Press', 10, '\"Normal People\" follows the complex relationship between Connell and Marianne, two teenagers from a small town in Ireland. Despite their different backgrounds and social statuses, they form a deep connection that persists through various challenges and changes as they navigate their way through university and early adulthood. Sally Rooney\'s insightful portrayal of love, identity, and social dynamics makes for a compelling and emotionally resonant read.', '2024-03-02 11:24:43', 0, 0, 0),
(59, 19, 'Gone Girl', 'images/MnT1.PNG', 'Gillian Flynn', 'Crown', 10, '\"Gone Girl\" is a gripping psychological thriller that begins with the sudden disappearance of Amy Dunne on her fifth wedding anniversary. As the investigation unfolds, secrets and lies surface, casting suspicion on both Amy\'s husband, Nick, and Amy herself. Gillian Flynn crafts a twisted tale of deception, manipulation, and marital strife that keeps readers on the edge of their seats until the shocking conclusion.', '2024-03-02 11:27:09', 0, 0, 0),
(60, 19, 'The Girl with the Dragon Tattoo', 'images/MnT2.PNG', 'Stieg Larsson', 'Vintage Crime/Black Lizard', 10, 'In \"The Girl with the Dragon Tattoo,\" disgraced journalist Mikael Blomkvist teams up with the enigmatic hacker Lisbeth Salander to solve the decades-old disappearance of a wealthy industrialist\'s niece. As they delve deeper into the dark underbelly of Swedish society, they uncover a tangled web of corruption, violence, and family secrets. Stieg Larsson\'s masterful storytelling and complex characters make for a thrilling and compelling read.', '2024-03-02 11:28:05', 0, 0, 0),
(61, 19, 'The Silent Patient', 'images/MnT3.PNG', 'Alex Michaelides', 'Celadon Books', 10, '\"The Silent Patient\" follows the story of Alicia Berenson, a celebrated painter who shoots her husband and then stops speaking altogether. Years later, Theo Faber, a psychotherapist, becomes obsessed with unlocking the mystery behind Alicia\'s silence. As he delves into her past and unravels the truth, he discovers shocking revelations that challenge everything he thought he knew. Alex Michaelides delivers a gripping and twist-filled psychological thriller that will keep readers guessing until the very end.', '2024-03-02 11:29:02', 0, 0, 0),
(62, 19, 'The Da Vinci Code', 'images/MnT4.PNG', 'Dan Brown', 'Doubleday', 10, 'In \"The Da Vinci Code,\" symbologist Robert Langdon finds himself embroiled in a deadly race against time to solve a murder and unravel a centuries-old conspiracy. With the help of cryptologist Sophie Neveu, Langdon follows a trail of clues hidden in famous works of art and historical landmarks, uncovering secrets that could shake the foundations of Christianity. Dan Brown\'s fast-paced narrative, cryptic puzzles, and thrilling plot twists make for an exhilarating read that combines history, mystery, and adventure.', '2024-03-02 11:29:55', 0, 0, 0),
(63, 20, 'Pride and Prejudice', '/path/to/upload/directory/1715137297_cc52276e22fbadcebdaa.png', 'Jane Austen', 'Penguin Classics', 10, 'Jane Austen\'s \"Pride and Prejudice\" is a timeless classic that follows the romantic entanglements of the Bennet sisters, particularly the spirited Elizabeth Bennet and the enigmatic Mr. Darcy. Set in the English countryside during the early 19th century, the novel explores themes of love, marriage, social status, and personal growth with Austen\'s signature wit and insight.', '2024-05-08 03:01:37', 0, 0, 0),
(64, 20, 'To Kill a Mockingbird', '/path/to/upload/directory/1715137622_dfae3ed70d66f3177862.png', 'Harper Lee', 'Harper Perennial Modern Classics', 10, '\"To Kill a Mockingbird\" is a powerful and poignant coming-of-age story set in the racially charged atmosphere of the American South during the 1930s. Through the eyes of young Scout Finch, the novel explores themes of racial injustice, moral growth, and empathy as her father, lawyer Atticus Finch, defends a black man wrongly accused of raping a white woman.', '2024-05-08 03:07:02', 0, 0, 0),
(65, 20, '1984', '/path/to/upload/directory/1715137554_2219b989b81c477e652a.png', 'George Orwell', 'Signet Classics', 10, 'George Orwell\'s \"1984\" is a dystopian masterpiece that envisions a totalitarian society where individualism is suppressed, and the government, led by the enigmatic Big Brother, monitors and controls every aspect of citizens\' lives. Through the eyes of protagonist Winston Smith, the novel explores themes of surveillance, propaganda, and the erosion of truth, offering a chilling warning about the dangers of authoritarianism', '2024-05-08 03:05:54', 0, 0, 0),
(66, 20, 'Moby-Dick', 'images/c4.PNG', 'Herman Melville', 'Penguin Classics', 10, '\"Moby-Dick\" is an epic tale of obsession and revenge set against the backdrop of the 19th-century whaling industry. Captain Ahab, driven by his relentless pursuit of the elusive white whale, Moby Dick, leads his crew on a perilous journey that ultimately leads to their destruction. Herman Melville\'s novel is a sprawling exploration of themes such as fate, ambition, and the complexities of the human spirit.', '2024-03-02 11:33:51', 0, 0, 0),
(67, 21, 'The Alchemist', 'images/qr1.PNG', 'Paulo Coelho', 'HarperOne', 10, '\"The Alchemist\" is a captivating fable about Santiago, a shepherd boy who embarks on a journey to fulfill his dreams. Along the way, he encounters a series of challenges and meets extraordinary characters who impart wisdom and guidance. Through his adventures, Santiago learns valuable lessons about following one\'s heart, pursuing one\'s dreams, and finding one\'s destiny.', '2024-03-02 11:35:03', 0, 0, 0),
(68, 21, 'The Curious Incident of the Dog in the Night-Time', 'images/qr2.PNG', 'Mark Haddon', 'Vintage Contemporaries', 10, ' Mark Haddon\'s \"The Curious Incident of the Dog in the Night-Time\" is a unique and compelling mystery novel narrated by Christopher Boone, a fifteen-year-old boy with autism. When Christopher discovers the dead body of his neighbor\'s dog, he sets out to solve the mystery, leading to surprising revelations about his own life and family. The novel offers a poignant exploration of love, truth, and the complexities of human relationships.', '2024-03-02 11:36:18', 0, 0, 0),
(69, 21, 'The Hitchhiker\'s Guide to the Galaxy', 'images/qr3.PNG', 'Douglas Adams', 'Del Rey Books', 10, '\"The Hitchhiker\'s Guide to the Galaxy\" is a hilarious and irreverent science fiction comedy that follows the misadventures of Arthur Dent, an ordinary human who is swept off Earth just before it is demolished to make way for a hyperspace bypass. Joined by his alien friend Ford Prefect, Arthur embarks on a journey across the galaxy, encountering bizarre creatures, improbable situations, and the enigmatic guidebook known as the Hitchhiker\'s Guide to the Galaxy.', '2024-03-02 11:37:46', 0, 0, 0),
(70, 21, 'Eleanor Oliphant Is Completely Fine', 'images/qr4.PNG', 'Gail Honeyman', 'Pamela Dorman Books', 10, '\"Eleanor Oliphant Is Completely Fine\" is a heartwarming and uplifting novel that follows the quirky and socially awkward Eleanor Oliphant as she navigates life in Glasgow. When Eleanor develops an unexpected friendship with a coworker and becomes enamored with a local musician, she is forced to confront the traumas of her past and take steps towards healing and self-discovery. Gail Honeyman\'s debut novel is a charming and poignant exploration of loneliness, resilience, and the power of human connection.', '2024-03-02 11:39:18', 0, 0, 0),
(71, 22, 'Circe', 'images/Mf1.PNG', 'Madeline Miller', 'Little, Brown and Company', 10, '\"Circe\" reimagines the story of the mythical sorceress Circe from Greek mythology. Banished to the island of Aiaia by Zeus, Circe discovers her powers of witchcraft and encounters a series of famous figures from Greek mythology, including Odysseus, the Minotaur, and the gods themselves. Madeline Miller\'s novel offers a rich and immersive retelling of Circe\'s journey to independence and self-discovery.', '2024-03-02 11:40:33', 0, 1, 0),
(72, 22, 'The Song of Achilles', 'images/mf2.PNG', 'Madeline Miller', 'Ecco', 10, '\"The Song of Achilles\" is a retelling of the epic Trojan War from the perspective of Patroclus, the young prince exiled to the court of King Peleus. As he forms a deep bond with Achilles, the legendary Greek hero, Patroclus finds himself drawn into the tumultuous events of the war, leading to tragic consequences. Madeline Miller\'s lyrical prose and vivid characterization bring the ancient world of Greek mythology to life in this poignant and moving novel.', '2024-03-02 11:43:39', 0, 0, 0),
(73, 22, 'American Gods', 'images/mf3.PNG', 'Neil Gaiman', 'William Morrow', 10, 'In \"American Gods,\" Neil Gaiman blends elements of mythology, fantasy, and Americana to create a modern epic of gods and mortals. When ex-convict Shadow Moon is released from prison, he becomes embroiled in a conflict between the ancient gods of myth, who have taken human form and now struggle for relevance in contemporary America. As Shadow navigates this strange and surreal world, he uncovers secrets, confronts his own past, and grapples with the nature of belief and identity.', '2024-03-02 11:44:27', 0, 0, 0),
(74, 22, 'The Golem and the Jinni', 'images/mf4.PNG', 'Helene Wecker', 'Harper', 10, ' \"The Golem and the Jinni\" is a captivating blend of myth and historical fiction set in turn-of-the-century New York City. When a golem created to be a wife is abandoned in the streets of Manhattan, she forms an unlikely friendship with a jinni released from a magical flask. Together, they navigate the immigrant communities of New York and confront the challenges of living among humans while grappling with their own identities and desires. Helene Wecker\'s novel is a spellbinding tale of friendship, love, and belonging.', '2024-03-02 11:46:32', 0, 0, 0),
(75, 24, 'Steve Jobs', 'images/Bio1.PNG', 'Walter Isaacson', 'Simon & Schuster', 10, 'Isaacson provides a comprehensive biography of Steve Jobs, the co-founder of Apple Inc. Drawing on extensive interviews with Jobs himself, as well as with family members, colleagues, and competitors, Isaacson offers insights into Jobs\' complex personality, creative genius, and entrepreneurial spirit. This biography provides a compelling portrait of one of the most influential figures in the tech industry.', '2024-03-02 22:47:16', 0, 0, 0),
(76, 24, 'Becoming', 'images/Bio2.PNG', 'Michelle Obama', 'Crown Publishing Group', 10, 'Michelle Obama reflects on her life journey, from her childhood on the South Side of Chicago to her years as First Lady of the United States. With candor and grace, she shares her experiences, triumphs, and challenges, offering readers an intimate glimpse into her personal and professional life. This memoir inspires and empowers readers to embrace their own paths of self-discovery and growth.', '2024-03-02 22:48:26', 0, 0, 0),
(77, 24, 'Leonardo da Vinci', 'images/Bio3.PNG', 'Walter Isaacson', 'Simon & Schuster', 10, 'Isaacson delves into the life and achievements of Leonardo da Vinci, the renowned Renaissance artist, inventor, and thinker. Drawing on da Vinci\'s notebooks and artworks, as well as historical records, Isaacson paints a vivid portrait of a true polymath whose curiosity and creativity knew no bounds. This biography offers valuable insights into da Vinci\'s genius and enduring legacy.', '2024-03-02 22:53:56', 0, 0, 0),
(78, 24, 'Unbroken: A World War II Story of Survival, Resilience, and Redemption', 'images/Bio4.PNG', 'by Laura Hillenbrand', 'Random House', 10, 'Hillenbrand recounts the incredible true story of Louis Zamperini, an Olympic athlete and World War II bombardier who survived a plane crash in the Pacific Ocean, endured weeks adrift at sea, and faced brutal treatment as a prisoner of war in Japan. Through meticulous research and gripping storytelling, Hillenbrand chronicles Zamperini\'s harrowing journey and ultimate triumph over adversity. This biography is a testament to the resilience of the human spirit.', '2024-03-02 22:55:39', 0, 0, 0),
(79, 25, 'Meditations', 'images/Philo1.PNG', 'Marcus Aurelius', 'Various publishers (public domain)', 10, '\"Meditations\" is a series of personal writings by Marcus Aurelius, Roman Emperor from 161 to 180 AD, recording his private notes to himself and ideas on Stoic philosophy. It offers profound insights into Stoic ethics, resilience, and the nature of the self, providing timeless wisdom on how to live a meaningful and virtuous life.', '2024-03-02 22:56:37', 0, 0, 0),
(80, 25, 'The Republic', 'images/Philo2.PNG', 'Plato', 'Various publishers (public domain)', 10, 'In \"The Republic,\" Plato presents his vision of an ideal society governed by philosopher-kings and explores fundamental questions about justice, morality, and the nature of reality. Through dialogues and allegories, Plato examines the concept of justice in both the individual and the state, sparking enduring debates on political philosophy and ethics.', '2024-03-02 22:57:39', 0, 0, 0),
(81, 25, 'Thus Spoke Zarathustra', 'images/Philo3.PNG', 'Friedrich Nietzsche', 'Various publishers', 10, 'Nietzsche\'s philosophical novel \"Thus Spoke Zarathustra\" follows the journey of the prophet Zarathustra as he delivers his teachings on the \"overman\" or \"superior individual\" and the eternal recurrence. Through poetic and aphoristic language, Nietzsche challenges traditional moral values and advocates for a reevaluation of human existence and potential.', '2024-03-02 22:58:35', 0, 0, 0),
(82, 25, 'Being and Time', 'images/Philo4.PNG', 'Martin Heidegger', 'State University of New York Press', 10, 'Heidegger\'s magnum opus \"Being and Time\" is a groundbreaking work in existential phenomenology. It delves into the question of being and explores the nature of existence, temporality, and human subjectivity. Heidegger introduces the concept of \"Dasein\" (being-there) to analyze the fundamental structures of human existence and the meaning of authenticity.', '2024-03-02 22:59:29', 0, 0, 0),
(83, 26, 'A People\'s History of the United States', 'images/History1.PNG', 'Howard Zinn', 'Harper Perennial Modern Classics', 10, 'Howard Zinn presents a unique perspective on American history by focusing on the experiences of ordinary people, including Native Americans, slaves, immigrants, and laborers. Through engaging narratives and primary source material, Zinn challenges traditional historical narratives and offers a critical examination of power dynamics, social movements, and injustices throughout U.S. history.', '2024-03-02 23:00:18', 0, 0, 0),
(84, 26, 'Guns, Germs, and Steel: The Fates of Human Societies', 'images/History2.PNG', 'Jared Diamond', 'W. W. Norton & Company', 10, 'Jared Diamond explores the broad patterns of human history, seeking to understand why certain societies have thrived while others have faltered. Through interdisciplinary analysis, Diamond examines the roles of geography, ecology, and technology in shaping the course of human development. This Pulitzer Prize-winning book offers insights into the deep roots of inequality and globalization.', '2024-03-02 23:01:06', 0, 0, 0),
(85, 26, 'The Rise and Fall of the Third Reich: A History of Nazi Germany', 'images/History3.PNG', 'William L. Shirer', 'Simon & Schuster', 10, 'William L. Shirer provides a comprehensive account of Nazi Germany, from Adolf Hitler\'s rise to power to the collapse of the Third Reich. Drawing on firsthand experience as a journalist reporting from Nazi Germany, as well as extensive research, Shirer offers a detailed narrative of political intrigue, military campaigns, and the Holocaust. This seminal work remains a definitive history of one of the darkest periods of the 20th century.', '2024-03-02 23:02:03', 0, 0, 0),
(86, 26, 'A Short History of Nearly Everything', 'images/History4.PNG', 'Bill Bryson', 'Broadway Books', 10, 'Bill Bryson takes readers on a captivating journey through the history of science, from the origins of the universe to the evolution of life on Earth. With wit and curiosity, Bryson explores key scientific discoveries and the lives of the individuals behind them, making complex concepts accessible to a general audience. This entertaining and informative book offers a panoramic view of the natural world and humanity\'s quest for understanding.', '2024-03-02 23:02:54', 0, 0, 0),
(87, 27, 'The Elegant Universe: Superstrings, Hidden Dimensions, and the Quest for the Ultimate Theory', 'images/MnS1.PNG', 'Brian Greene', 'W. W. Norton & Company', 10, 'Brian Greene explores the fascinating world of modern theoretical physics, delving into concepts such as string theory, quantum mechanics, and general relativity. Through clear explanations and engaging storytelling, Greene elucidates complex ideas about the nature of the universe and the search for a unified theory of everything, offering readers a glimpse into the frontiers of contemporary science.', '2024-03-02 23:04:13', 0, 0, 0),
(88, 27, 'The Code Book: The Science of Secrecy from Ancient Egypt to Quantum Cryptography', 'images/MnS2.PNG', 'Simon Singh', 'Anchor', 10, 'Simon Singh traces the history of cryptography, from ancient civilizations to the digital age. Exploring the role of codes and code-breaking in warfare, diplomacy, and espionage, Singh reveals the fascinating stories behind cryptography\'s evolution. This book provides insights into the mathematical principles underlying encryption techniques and their impact on society.', '2024-03-02 23:05:20', 0, 0, 0),
(89, 28, 'The Four-Hour Body: An Uncommon Guide to Rapid Fat-Loss, Incredible Sex, and Becoming Superhuman', 'images/HnF.PNG', 'Timothy Ferriss', 'Harmony Books', 10, 'Timothy Ferriss explores unconventional methods for achieving optimal health and fitness in \"The Four-Hour Body.\" Drawing on personal experimentation and interviews with experts, Ferriss presents strategies for rapid fat loss, muscle gain, improved sleep, and enhanced sexual performance. This book offers practical advice and insights for readers looking to transform their bodies and lives.', '2024-03-02 23:06:57', 0, 1, 0),
(90, 28, 'Born to Run: A Hidden Tribe, Superathletes, and the Greatest Race the World Has Never Seen', 'images/HnS2.PNG', 'Christopher McDougall', 'Vintage Books', 10, 'Christopher McDougall investigates the secrets of long-distance running and human endurance in \"Born to Run.\" Through captivating storytelling and encounters with extraordinary athletes, McDougall explores the science and culture of running, challenging conventional wisdom about footwear, biomechanics, and human potential. This book inspires readers to rediscover the joy of running and the innate capabilities of the human body.', '2024-03-02 23:08:20', 0, 0, 0),
(91, 28, 'The Body Keeps the Score: Brain, Mind, and Body in the Healing of Trauma', 'images/HnF3.PNG', 'Bessel van der Kolk', 'Penguin Books', 10, 'Bessel van der Kolk examines the profound connections between trauma and physical health in \"The Body Keeps the Score.\" Drawing on decades of clinical research and experience, van der Kolk explores how trauma affects the brain, body, and emotions, leading to a range of physical and psychological symptoms. This book offers insights into innovative therapies and practices for healing trauma and restoring well-being.', '2024-03-02 23:09:29', 0, 0, 0),
(92, 28, 'The Obesity Code: Unlocking the Secrets of Weight Loss', 'images/HnF4.PNG', 'Jason Fung', 'Greystone Books', 10, 'Jason Fung challenges conventional wisdom about obesity and weight loss in \"The Obesity Code.\" Drawing on scientific research and clinical experience, Fung explores the role of insulin resistance and hormonal imbalance in driving obesity epidemic. He presents a comprehensive framework for understanding and addressing the root causes of weight gain, offering practical strategies for sustainable weight loss and improved metabolic health.', '2024-03-02 23:10:29', 0, 0, 0),
(93, 29, 'The Intelligent Investor: The Definitive Book on Value Investing', 'images/Finance1.PNG', 'Benjamin Graham', 'HarperBusiness', 10, 'Benjamin Graham, known as the father of value investing, lays out the principles of investing in this timeless classic. The book emphasizes the importance of value investing, focusing on fundamental analysis and long-term strategies rather than short-term market fluctuations. It provides invaluable insights into understanding financial markets, evaluating stocks, and managing risks, making it essential reading for both novice and experienced investors.', '2024-03-03 02:34:16', 0, 0, 0),
(94, 29, 'Rich Dad Poor Dad: What the Rich Teach Their Kids About Money That the Poor and Middle Class Do Not!', 'images/Finance2.PNG', 'Robert T. Kiyosaki', 'Plata Publishing', 10, 'Robert Kiyosaki shares his personal experiences and financial lessons learned from his two \"dads\" - his real father and the father of his best friend, whom he refers to as his \"rich dad\". Through anecdotes and practical advice, Kiyosaki highlights the differences in mindset and financial strategies between the wealthy and the middle class. The book challenges conventional beliefs about money and encourages readers to adopt a more entrepreneurial and wealth-building mindset.', '2024-03-03 02:36:10', 0, 0, 0),
(95, 29, 'Financial Intelligence: A Manager\'s Guide to Knowing What the Numbers Really Mean', 'images/Finance3.PNG', 'Karen Berman and Joe Knight', 'Harvard Business Review Press', 10, ' In \"Financial Intelligence\", Berman and Knight demystify financial statements and help managers and executives understand the numbers behind their businesses. The book provides practical insights into financial analysis, budgeting, forecasting, and decision-making, equipping non-financial professionals with the knowledge and skills necessary to contribute effectively to their organization\'s financial success.', '2024-03-03 02:36:58', 0, 0, 0),
(96, 29, 'Corporate Finance For Dummies', 'images/Finnance4.PNG', 'Michael Taillard', 'For Dummies', 10, ' \"Corporate Finance For Dummies\" offers a beginner-friendly introduction to corporate finance concepts and practices. Taillard breaks down complex financial topics such as valuation, capital budgeting, risk management, and financial planning into easy-to-understand language. With clear explanations and real-world examples, this book serves as a comprehensive guide for individuals looking to grasp the fundamentals of corporate finance.\r\n\r\n\r\n\r\n\r\n', '2024-03-03 02:37:54', 0, 0, 0),
(97, 30, 'The Lean Startup: How Today\'s Entrepreneurs Use Continuous Innovation to Create Radically Successful Businesses', 'images/e1.PNG', 'Eric Ries', 'Currency', 10, 'Eric Ries introduces the concept of the lean startup methodology, which emphasizes rapid iteration, validated learning, and a focus on customer feedback to build successful businesses. Ries outlines practical strategies for entrepreneurs to minimize wasted resources, accelerate product development, and adapt to market changes effectively. This book is essential reading for anyone looking to launch a startup or innovate within an existing organization.', '2024-03-03 02:38:54', 0, 1, 0);
INSERT INTO `books` (`b_id`, `s_id`, `bname`, `image_path`, `author`, `publisher`, `quantity_available`, `description`, `created_at`, `is_rented`, `is_in_cart`, `is_in_wishlist`) VALUES
(98, 30, 'Zero to One: Notes on Startups, or How to Build the Future', 'images/e2.PNG', 'Peter Thiel with Blake Masters', 'Currency', 10, 'In \"Zero to One,\" Peter Thiel shares his insights on entrepreneurship, innovation, and building successful startups. Thiel challenges conventional wisdom and encourages entrepreneurs to pursue unique and transformative ideas that create new markets (going from zero to one) rather than competing in existing ones. Drawing from his experience as a co-founder of PayPal and an early investor in Facebook, Thiel offers valuable advice on building a sustainable and disruptive business.', '2024-03-03 02:39:40', 0, 1, 0),
(99, 30, 'The $100 Startup: Reinvent the Way You Make a Living, Do What You Love, and Create a New Future', 'images/e3.PNG', 'Chris Guillebeau', 'Crown Business', 10, 'Chris Guillebeau profiles dozens of entrepreneurs who have built successful businesses with modest investments in \"The $100 Startup.\" Through inspiring stories and practical advice, Guillebeau demonstrates that anyone can start a profitable venture with minimal resources by leveraging their skills, passions, and creativity. This book is a roadmap for aspiring entrepreneurs seeking to turn their ideas into income-generating ventures.', '2024-03-03 02:40:32', 0, 0, 0),
(100, 30, 'Disciplined Entrepreneurship: 24 Steps to a Successful Startup', 'images/e4.PNG', 'Bill Aulet', 'Wiley', 10, '\"Disciplined Entrepreneurship\" by Bill Aulet provides a comprehensive framework for building successful startups. Aulet outlines a structured approach consisting of 24 steps, covering every aspect of the entrepreneurial journey from idea generation to company formation and scaling. Drawing from his experience as an entrepreneur and educator at MIT, Aulet offers practical insights, tools, and case studies to guide aspiring entrepreneurs through the complexities of starting and growing a business.', '2024-03-03 02:41:25', 0, 0, 0),
(101, 31, 'The Five Dysfunctions of a Team: A Leadership Fable', 'images/mgmt1.PNG', 'Patrick Lencioni', 'Jossey-Bass', 10, 'Through a fictional narrative, Patrick Lencioni explores the common dysfunctions that hinder team effectiveness in \"The Five Dysfunctions of a Team.\" Lencioni identifies lack of trust, fear of conflict, lack of commitment, avoidance of accountability, and inattention to results as the key obstacles to team success. The book offers practical strategies and actionable insights for leaders to overcome these dysfunctions and build cohesive, high-performing teams.', '2024-03-03 02:42:10', 0, 1, 0),
(102, 31, 'Good to Great: Why Some Companies Make the Leap... and Others Don\'t', 'images/mgmt2.PNG', 'Jim Collins', 'HarperBusiness', 10, 'In \"Good to Great,\" Jim Collins and his research team examine the factors that differentiate great companies from merely good ones. Through extensive research and analysis, Collins identifies key principles and practices that contribute to sustained business success, including disciplined leadership, a culture of excellence, and a focus on long-term strategic planning. The book offers valuable lessons and actionable insights for leaders striving to take their organizations from good to great.', '2024-03-03 02:42:53', 0, 0, 0),
(103, 31, 'First, Break All the Rules: What the World\'s Greatest Managers Do Differently', 'images/mgmt3.PNG', 'Marcus Buckingham and Curt Coffman', 'Gallup Press', 10, 'Based on extensive Gallup research, \"First, Break All the Rules\" challenges conventional management wisdom and identifies the unique qualities and practices of exceptional managers. Buckingham and Coffman distill their findings into 12 key questions that reveal the secrets of great management, emphasizing the importance of focusing on employees\' strengths, fostering engagement, and providing autonomy and support. This book offers practical guidance for managers at all levels to enhance their effectiveness and drive organizational performance.', '2024-03-03 02:43:44', 0, 0, 0),
(104, 31, 'The One Minute Manager', 'images/mgmt4.PNG', 'Kenneth Blanchard and Spencer Johnson', 'William Morrow', 10, '\"The One Minute Manager\" presents a simple yet powerful approach to effective leadership and management. Blanchard and Johnson introduce three core techniques: goal setting, praising, and reprimanding, each of which can be executed in just one minute. Through practical examples and anecdotes, the book demonstrates how these techniques can improve productivity, morale, and performance, making it an invaluable resource for managers seeking to maximize their impact in minimal time.', '2024-03-03 02:44:25', 0, 0, 0),
(105, 32, 'Designing Your Life: How to Build a Well-Lived, Joyful Life', '/path/to/upload/directory/1715137387_de6cf81ad3fa5b847b28.png', 'Bill Burnett and Dave Evans', 'Knopf', 10, '\"Designing Your Life\" applies design thinking principles to the process of career and life planning. Burnett and Evans offer a practical framework for designing a fulfilling career by applying the same methods designers use to create products and solutions. Through a series of exercises and actionable advice, the book guides readers in crafting a life and career that aligns with their values, interests, and aspirations.', '2024-05-08 03:03:07', 0, 0, 0),
(106, 32, 'What Color Is Your Parachute? A Practical Manual for Job-Hunters and Career-Changers', '/path/to/upload/directory/1715137429_df63ffc046d672118a26.png', 'Richard N. Bolles', 'Ten Speed Press', 10, '\"What Color Is Your Parachute?\" is a perennial bestseller and a comprehensive guide for job seekers and career changers. Bolles provides practical advice on navigating the job market, finding fulfilling work, and developing effective job search strategies. The book covers topics such as self-assessment, resume writing, networking, interviewing, and negotiating job offers, making it an indispensable resource for anyone in career transition.', '2024-05-08 03:03:49', 0, 0, 0),
(107, 32, 'Lean In: Women, Work, and the Will to Lead', 'images/c3.PNG', 'Sheryl Sandberg', 'Knopf', 10, 'Sheryl Sandberg\'s \"Lean In\" addresses the challenges women face in the workplace and offers practical advice for advancing their careers. Drawing from personal experiences and research, Sandberg examines issues such as gender bias, work-life balance, and leadership representation. The book encourages women to pursue their ambitions, assert themselves in the workplace, and strive for leadership roles, while also advocating for systemic change to promote gender equality.', '2024-03-03 02:46:56', 0, 0, 0),
(108, 32, 'So Good They Can\'t Ignore You: Why Skills Trump Passion in the Quest for Work You Love', 'images/c4.PNG', 'Cal Newport', 'Grand Central Publishing', 10, '\"So Good They Can\'t Ignore You\" challenges the conventional wisdom that passion is the key to finding meaningful work. Newport argues that passion often follows mastery and that focusing on developing valuable skills is a more effective approach to building a fulfilling career. Drawing from case studies and research, Newport presents a compelling argument for adopting a craftsman mindset, pursuing deliberate practice, and cultivating career capital to achieve professional success and satisfaction.', '2024-03-03 02:47:38', 0, 0, 0),
(109, 33, 'Principles of Economics', 'images/eco1.PNG', 'N. Gregory Mankiw', ' Cengage Learning', 9, '\"Principles of Economics\" by N. Gregory Mankiw is a widely used introductory economics textbook that covers fundamental economic concepts and principles. Mankiw\'s clear writing style and real-world examples make complex economic theories accessible to students and readers. The book covers topics such as supply and demand, market structures, macroeconomic principles, and international trade, providing a solid foundation for understanding economic theory and its applications.', '2024-03-03 02:48:37', 1, 0, 0),
(110, 33, 'Capital in the Twenty-First Century', 'images/eco2.PNG', 'Thomas Piketty', 'Harvard University Press', 9, 'Thomas Piketty\'s \"Capital in the Twenty-First Century\" is a seminal work that explores the dynamics of wealth and income inequality over time. Drawing on extensive historical data and economic analysis, Piketty examines the underlying causes and consequences of inequality, arguing that wealth tends to concentrate in the hands of a few in capitalist economies. The book sparked widespread debate and renewed interest in the study of inequality and its implications for society and policy.', '2024-03-03 02:49:28', 1, 0, 0),
(111, 33, 'Freakonomics: A Rogue Economist Explores the Hidden Side of Everything', 'images/eco3.PNG', 'Steven D. Levitt and Stephen J. Dubner', 'William Morrow', 10, '\"Freakonomics\" by Steven D. Levitt and Stephen J. Dubner offers a fresh and unconventional perspective on economics by applying economic principles to diverse and unexpected topics. Through a series of engaging and thought-provoking essays, the authors explore the hidden forces shaping human behavior and societal outcomes, from crime rates and parenting strategies to sumo wrestling and the Ku Klux Klan. \"Freakonomics\" challenges readers to think differently about the world around them and the economic forces at play.', '2024-03-03 02:50:15', 0, 0, 0),
(112, 33, 'The Wealth of Nations', 'images/eco4.PNG', 'Adam Smith', 'Bantam Classics', 10, '\"The Wealth of Nations\" by Adam Smith is a foundational work in the field of economics, first published in 1776. In this seminal text, Smith lays out the principles of classical economics, including the division of labor, the invisible hand mechanism, and the role of markets in allocating resources efficiently. Smith\'s ideas have had a profound impact on economic theory and policy, shaping the development of modern capitalism and providing insights into the functioning of market economies.', '2024-03-03 02:51:00', 0, 0, 0),
(113, 34, 'The Name of the Rose', 'images/Histoadv1.PNG', 'Umberto Eco', 'Harcourt Brace Jovanovich', 10, '\"The Name of the Rose\" is a historical mystery novel set in an Italian monastery in the year 1327. Written by Umberto Eco, it follows the Franciscan friar William of Baskerville and his novice Adso of Melk as they investigate a series of mysterious deaths within the monastery. The novel is rich in historical detail, exploring themes of religion, philosophy, and the power struggles of the medieval Church, all wrapped within a gripping mystery.', '2024-03-03 02:58:02', 0, 1, 0),
(114, 34, 'The Alienist', 'images/HistAdv2.PNG', 'Caleb Carr', 'Random House', 10, 'Set in New York City in the late 19th century, \"The Alienist\" follows Dr. Laszlo Kreizler, an early criminal psychologist, as he investigates a series of gruesome murders targeting young male prostitutes. Teaming up with a diverse group of colleagues, including a newspaper illustrator and a police secretary, Dr. Kreizler delves into the dark underbelly of Gilded Age New York to track down a deranged serial killer. Combining historical detail with gripping suspense, Caleb Carr\'s novel offers a thrilling journey into the emerging field of forensic psychology amidst the backdrop of a rapidly changing city.', '2024-03-03 03:03:10', 0, 1, 0),
(115, 35, 'Jonathan Strange & Mr Norrell', 'images/HistFant1.PNG', 'Susanna Clarke', 'Bloomsbury Publishing', 10, '\"Jonathan Strange & Mr Norrell\" is a historical fantasy novel set in an alternate version of early 19th-century England, where magic once existed but has since faded into myth and obscurity. Susanna Clarke\'s intricate tale follows two magicians, the reclusive Mr. Norrell and the adventurous Jonathan Strange, as they seek to revive the practice of magic in England. As they delve deeper into the world of sorcery, they uncover ancient secrets and face unforeseen consequences. Clarke weaves a mesmerizing narrative filled with rich historical detail, fantastical elements, and complex characters, creating a captivating blend of history and fantasy.', '2024-03-03 03:04:55', 0, 0, 0),
(116, 36, 'The Pillars of the Earth', 'images/HistEpic1.PNG', 'Ken Follett', 'William Morrow and Company', 10, '\"The Pillars of the Earth\" is a sweeping historical epic set in 12th-century England. Ken Follett\'s masterpiece follows the lives of a diverse cast of characters, including stonemasons, monks, nobles, and peasants, as they navigate the tumultuous period of the Anarchy, a time of civil war and political upheaval. At the heart of the novel is the construction of a magnificent cathedral in the fictional town of Kingsbridge, a project that spans decades and shapes the destinies of those involved. Through intricate plotting and rich historical detail, Follett crafts a compelling saga of ambition, love, betrayal, and redemption against the backdrop of medieval Europe.', '2024-03-03 03:06:55', 0, 0, 0),
(117, 36, 'The Song of Achilles', 'images/HistFant2.PNG', 'Madeline Miller', 'Ecco', 10, '\"The Song of Achilles\" is a lyrical historical epic that retells the story of the Trojan War from the perspective of Patroclus, the exiled prince and companion of the legendary Greek hero Achilles. Written by Madeline Miller, the novel explores the deep bond between Patroclus and Achilles, from their childhood friendship to their tragic fate on the battlefield of Troy. Through Miller\'s exquisite prose and meticulous research, readers are transported to ancient Greece, where gods and mortals clash, and where love and honor collide in a tale of epic proportions. \"The Song of Achilles\" is a timeless story of love, sacrifice, and heroism that resonates across the ages.', '2024-03-03 03:07:39', 0, 0, 0),
(118, 35, 'The Bear and the Nightingale', 'images/HistFant2.PNG', 'Katherine Arden', 'Del Rey Books', 10, '\"The Bear and the Nightingale\" is a historical fantasy novel inspired by Russian folklore. Set in medieval Russia, it tells the story of Vasilisa, a young girl with the ability to see and communicate with household spirits and mythical creatures. When her village becomes threatened by dark forces, Vasilisa must embrace her magical heritage to protect her family and her home. Katherine Arden\'s lyrical prose and vivid descriptions bring to life a world where ancient legends intertwine with historical events, creating a mesmerizing tale of courage, magic, and the power of belief.', '2024-03-03 03:11:38', 0, 0, 0),
(119, 23, 'Atomic Habits: An Easy & Proven Way to Build Good Habits & Break Bad Ones', 'images/SI1.PNG', 'James Clear', 'Avery.', 10, 'In this transformative book, James Clear presents a comprehensive guide to understanding how habits work and how to effectively make changes in your life. Through practical strategies and scientific insights, Clear offers a roadmap for building good habits and breaking bad ones, helping readers achieve remarkable results in their personal and professional lives.', '2024-03-03 04:21:50', 0, 0, 0),
(120, 23, 'The Subtle Art of Not Giving a F*ck: A Counterintuitive Approach to Living a Good Life', 'images/SI2.PNG', 'Mark Manson, published', 'HarperOne.', 10, 'Mark Manson challenges conventional self-help advice with his irreverent and refreshing perspective. He argues that by embracing our limitations and uncertainties, and focusing on what truly matters to us, we can lead more fulfilling lives. Through candid anecdotes and blunt truths, Manson offers readers a guide to living with honesty, courage, and resilience.', '2024-03-03 04:22:38', 0, 0, 0),
(121, 23, 'Mindset: The New Psychology of Success', 'images/Si3.PNG', 'Carol S. Dweck', 'Ballantine Books.', 10, 'Psychologist Carol Dweck explores the power of mindset in shaping our lives and achievements. She introduces the concept of a \"growth mindset,\" which emphasizes the belief that our abilities and intelligence can be developed through dedication and hard work. Dweck demonstrates how adopting a growth mindset can lead to greater resilience, motivation, and success in various areas of life.', '2024-03-03 04:23:24', 0, 1, 0),
(122, 23, 'The Power of Now: A Guide to Spiritual Enlightenment', 'images/si4.PNG', 'Eckhart Tolle', 'New World Library.', 10, ' Eckhart Tolle\'s timeless classic offers readers profound insights into the nature of consciousness and the keys to experiencing inner peace and fulfillment. Through simple yet profound teachings, Tolle encourages readers to embrace the present moment and transcend the incessant chatter of the mind. This book serves as a practical guide to achieving spiritual awakening and living a life of profound joy and serenity.', '2024-03-03 04:24:10', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `book_id` int(11) DEFAULT NULL,
  `is_rented` tinyint(1) DEFAULT 0,
  `added_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `user_id`, `book_id`, `is_rented`, `added_at`) VALUES
(1, 16, 3, 0, '2024-02-06 15:55:44'),
(3, 16, 3, 0, '2024-02-06 15:55:44'),
(4, 16, 5, 0, '2024-02-06 15:55:44'),
(6, 14, 7, 0, '2024-02-06 16:00:28'),
(7, 16, 5, 0, '2024-02-08 05:46:27'),
(19, 10, 7, 0, '2024-02-21 11:19:29'),
(20, 10, 10, 0, '2024-02-21 11:29:02'),
(21, 10, 12, 0, '2024-02-21 11:29:18'),
(22, 10, 14, 0, '2024-02-22 06:31:09'),
(23, 10, 8, 0, '2024-02-22 08:51:25'),
(26, 10, 13, 0, '2024-03-04 08:29:06'),
(28, 10, 19, 0, '2024-03-04 11:00:50'),
(29, 10, 20, 0, '2024-03-04 11:06:54'),
(30, 10, 19, 0, '2024-03-04 11:08:02'),
(31, 10, 10, 0, '2024-03-04 12:55:31'),
(34, 10, 15, 0, '2024-03-04 17:25:23'),
(35, 10, 16, 0, '2024-03-04 17:25:33'),
(36, 17, 17, 0, '2024-03-04 17:46:15'),
(37, 17, 10, 0, '2024-03-05 04:10:58'),
(38, 10, 19, 0, '2024-03-05 04:13:27'),
(39, 10, 23, 0, '2024-03-05 08:23:20'),
(40, 10, 31, 0, '2024-03-05 08:29:22'),
(41, 10, 101, 0, '2024-03-05 08:30:50'),
(42, 17, 20, 0, '2024-03-05 08:33:04'),
(43, 17, 21, 0, '2024-03-05 09:20:26'),
(44, 10, 34, 0, '2024-03-05 09:25:58'),
(45, 17, 116, 0, '2024-03-05 09:39:38'),
(46, 17, 117, 0, '2024-03-05 09:51:45'),
(47, 10, 113, 0, '2024-03-05 10:08:15'),
(48, 17, 114, 0, '2024-03-05 10:12:48'),
(49, 17, 113, 0, '2024-03-05 10:21:02'),
(50, 11, 3, 0, '2024-03-05 10:26:54'),
(51, 11, 7, 0, '2024-03-05 10:28:03'),
(56, 17, 28, 0, '2024-03-06 05:59:22'),
(57, 17, 29, 0, '2024-03-06 05:59:48'),
(58, 17, 27, 0, '2024-03-06 06:07:56'),
(59, 11, 109, 0, '2024-03-06 07:16:41'),
(60, 17, 31, 0, '2024-03-06 07:17:51'),
(61, 11, 110, 0, '2024-03-06 07:21:49'),
(62, 11, 19, 0, '2024-03-06 07:22:57'),
(63, 17, 71, 0, '2024-03-06 09:20:17'),
(64, 11, 89, 0, '2024-03-07 04:36:43'),
(65, 11, 90, 0, '2024-03-07 04:38:57'),
(69, 10, 3, 0, '2024-03-07 04:52:08'),
(70, 10, 89, 0, '2024-03-07 04:55:05'),
(71, 11, 119, 0, '2024-03-07 05:30:49'),
(82, 11, 97, 0, '2024-03-07 06:13:50'),
(84, 11, 97, 0, '2024-03-07 06:16:52'),
(85, 11, 98, 0, '2024-03-07 06:23:32'),
(87, 17, 97, 0, '2024-03-07 08:52:18'),
(88, 17, 89, 0, '2024-03-07 08:57:33'),
(89, 11, 121, 0, '2024-03-07 09:47:12'),
(90, 11, 31, 0, '2024-03-11 11:08:07'),
(97, 10, 43, 0, '2024-03-18 05:54:04'),
(98, 10, 71, 0, '2024-03-21 05:57:54'),
(99, 10, 119, 0, '2024-03-22 04:47:46'),
(100, 14, 3, 0, '2024-03-22 09:36:08'),
(101, 10, 83, 0, '2024-03-22 16:41:17'),
(103, 11, 11, 0, '2024-03-23 06:37:01'),
(104, 17, 19, 0, '2024-03-23 08:14:32'),
(105, 17, 43, 0, '2024-03-23 08:22:55'),
(106, 17, 11, 0, '2024-03-23 08:23:55'),
(107, 14, 39, 0, '2024-03-23 09:39:51'),
(109, 10, 67, 0, '2024-03-25 17:16:12'),
(110, 10, 39, 0, '2024-04-05 05:04:18'),
(111, 10, 47, 0, '2024-05-07 06:20:46'),
(112, 21, 6, 0, '2024-05-07 06:23:09'),
(113, 21, 39, 0, '2024-05-07 15:36:59');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `c_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `number_of_books` int(11) DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_date` date DEFAULT curdate()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`c_id`, `title`, `number_of_books`, `created_at`, `created_date`) VALUES
(1, 'Kids book', 100, '2024-02-02 06:54:31', '2024-02-02'),
(2, 'Young and Adults', 50, '2024-02-02 12:47:56', '2024-02-02'),
(3, 'Fiction', 10, '2024-02-02 12:48:53', '2024-02-02'),
(4, 'Non Fiction', 20, '2024-02-05 06:08:32', '2024-02-05'),
(5, 'Business and Management', 10, '2024-02-09 12:47:32', '2024-02-09'),
(6, 'Historical Mystery', 100, '2024-02-26 06:44:04', '2024-02-26');

-- --------------------------------------------------------

--
-- Table structure for table `membershipplans`
--

CREATE TABLE `membershipplans` (
  `plan_id` int(11) NOT NULL,
  `plan_name` varchar(100) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `duration` int(11) NOT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `rental_limit` int(11) DEFAULT 0,
  `return_duration` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `membershipplans`
--

INSERT INTO `membershipplans` (`plan_id`, `plan_name`, `price`, `duration`, `description`, `created_at`, `updated_at`, `rental_limit`, `return_duration`) VALUES
(1, 'Classic', 2500.00, 1, 'For year 2 book at a time for 15 days....', '2024-02-15 11:28:06', '2024-04-06 09:43:26', 2, 15),
(2, 'Premium', 4000.00, 1, 'For  year 3 books at a time for 21 days.', '2024-02-17 06:10:33', '2024-04-06 09:43:47', 3, 21),
(3, 'Family', 5000.00, 1, 'Foe year 4 books at a time for 30 days.', '2024-02-17 06:11:36', '2024-04-06 09:44:02', 4, 30);

-- --------------------------------------------------------

--
-- Table structure for table `plans`
--

CREATE TABLE `plans` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `plan_id` int(11) DEFAULT NULL,
  `plan_name` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `duration` int(11) NOT NULL,
  `description` text DEFAULT NULL,
  `start_date` date NOT NULL,
  `expiry_date` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `is_active` tinyint(1) DEFAULT 0,
  `rental_limit` int(11) DEFAULT 0,
  `return_duration` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `plans`
--

INSERT INTO `plans` (`id`, `user_id`, `plan_id`, `plan_name`, `price`, `duration`, `description`, `start_date`, `expiry_date`, `created_at`, `updated_at`, `is_active`, `rental_limit`, `return_duration`) VALUES
(25, 10, 3, 'Family', 5000.00, 1, 'Foe year 4 books at a time for 30 days.', '2024-04-06', '2025-04-06', '2024-04-06 09:59:59', '2024-04-06 10:31:41', 1, 4, 30),
(26, 21, 1, 'Classic', 2500.00, 1, 'For year 2 book at a time for 15 days....', '2024-05-07', '2025-05-07', '2024-05-07 06:22:56', '2024-05-07 06:22:56', 1, 2, 15);

-- --------------------------------------------------------

--
-- Table structure for table `rented_books`
--

CREATE TABLE `rented_books` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `book_id` int(11) DEFAULT NULL,
  `rented_at` datetime DEFAULT NULL,
  `return_due_date` datetime DEFAULT NULL,
  `returned` tinyint(1) DEFAULT 0,
  `book_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rented_books`
--

INSERT INTO `rented_books` (`id`, `user_id`, `book_id`, `rented_at`, `return_due_date`, `returned`, `book_name`) VALUES
(0, 10, 39, '2024-04-06 10:01:08', '2024-04-21 10:01:08', 0, 'Young Adult Science Fiction'),
(0, 10, 3, '2024-04-06 10:06:29', '2024-04-21 10:06:29', 0, 'Brown Bear, Brown Bear, What Do You See?'),
(0, 10, 10, '2024-04-06 10:10:31', '2024-04-27 10:10:31', 0, 'Charlotte\'s Web'),
(0, 10, 12, '2024-04-06 10:10:38', '2024-04-27 10:10:38', 0, 'The Magic Tree House Series'),
(0, 10, 13, '2024-04-06 10:10:50', '2024-04-27 10:10:50', 0, 'The BFG'),
(0, 21, 6, '2024-05-07 06:23:13', '2024-05-22 06:23:13', 0, 'The Very Busy Spider');

-- --------------------------------------------------------

--
-- Table structure for table `subcategories`
--

CREATE TABLE `subcategories` (
  `s_id` int(11) NOT NULL,
  `c_id` int(11) DEFAULT NULL,
  `sub_title` varchar(100) NOT NULL,
  `number_of_books` int(11) DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_date` date DEFAULT curdate()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subcategories`
--

INSERT INTO `subcategories` (`s_id`, `c_id`, `sub_title`, `number_of_books`, `created_at`, `created_date`) VALUES
(1, 1, '0to2 year', 4, '2024-02-02 07:37:49', '2024-02-02'),
(2, 1, '3to5 year', 4, '2024-02-02 07:40:18', '2024-02-02'),
(3, 1, '6 to 8 ', 5, '2024-02-05 00:40:23', '2024-02-05'),
(4, 1, '9 to 12 year ', 50, '2024-02-08 01:16:08', '2024-02-08'),
(5, 1, 'Activity and Puzzles ', 100, '2024-02-08 01:16:38', '2024-02-08'),
(6, 1, 'Comics', 50, '2024-02-08 01:17:16', '2024-02-08'),
(8, 1, 'Child Mythology', 50, '2024-02-08 01:17:58', '2024-02-08'),
(9, 1, 'Picture Book', 50, '2024-02-08 01:18:24', '2024-02-08'),
(13, 2, 'Fantacy', 10, '2024-02-26 01:16:48', '2024-02-26'),
(14, 2, 'Science Fiction', 10, '2024-02-26 01:18:02', '2024-02-26'),
(15, 2, 'Romance', 10, '2024-02-26 01:19:27', '2024-02-26'),
(16, 2, 'Mystery Thriller', 10, '2024-02-26 01:23:00', '2024-02-26'),
(17, 2, 'Dystopain', 10, '2024-02-26 01:26:48', '2024-02-26'),
(18, 3, 'General and Literary', 10, '2024-02-26 01:29:07', '2024-02-26'),
(19, 3, 'Crime Mystery Thriller ', 10, '2024-02-26 01:30:03', '2024-02-26'),
(20, 3, 'Classic', 4, '2024-03-02 07:54:01', '2024-03-02'),
(21, 3, 'Quick Reads ', 5, '2024-03-02 07:54:21', '2024-03-02'),
(22, 3, 'Mythological Fiction', 5, '2024-03-02 07:54:44', '2024-03-02'),
(23, 4, 'Self Improved ', 50, '2024-03-02 11:55:34', '2024-03-02'),
(24, 4, 'Biography', 50, '2024-03-02 11:55:50', '2024-03-02'),
(25, 4, 'Philosophy', 50, '2024-03-02 11:56:08', '2024-03-02'),
(26, 4, 'History', 50, '2024-03-02 11:56:24', '2024-03-02'),
(27, 4, 'Maths and Science ', 50, '2024-03-02 11:56:45', '2024-03-02'),
(28, 4, 'Health and Fitness', 50, '2024-03-02 11:57:02', '2024-03-02'),
(29, 5, 'Finance', 50, '2024-03-02 11:58:25', '2024-03-02'),
(30, 5, 'Entrepreneurship', 50, '2024-03-02 11:58:59', '2024-03-02'),
(31, 5, 'Management', 50, '2024-03-02 11:59:21', '2024-03-02'),
(32, 5, 'Careers', 50, '2024-03-02 11:59:37', '2024-03-02'),
(33, 5, 'Economics', 50, '2024-03-02 11:59:55', '2024-03-02'),
(34, 6, 'Historical Adventure ', 50, '2024-03-02 12:00:21', '2024-03-02'),
(35, 6, 'Historical Fantasy', 50, '2024-03-02 12:00:58', '2024-03-02'),
(36, 6, 'Historical Epics ', 50, '2024-03-02 12:01:27', '2024-03-02');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `mobile_no` int(10) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `mobile_no`, `address`, `created_at`) VALUES
(8, '', '', '', 0, NULL, '2024-01-23 13:19:46'),
(9, '', '', '', 0, NULL, '2024-01-23 13:48:19'),
(10, 'Anagha', 'anagha@gmail.com', '123456', 2147483647, 'M G road pune', '2024-01-30 06:58:34'),
(11, 'Meera', 'user4@gmail.com', 'user4', 0, NULL, '2024-01-30 07:04:59'),
(12, '', 'user@gmail.com', '12345', 0, NULL, '2024-01-30 07:09:25'),
(14, 'Sonali', 'user5@gmail.com', 'user5', 0, NULL, '2024-02-01 14:00:04'),
(16, '', '', '', 0, NULL, '2024-02-05 15:45:41'),
(17, 'Madhura Mane', 'madhura@gamil.com', 'madhura', 2147483647, NULL, '2024-02-09 12:37:05'),
(18, 'Mina Mandane', 'mina@gamil.com', 'Mina@bmb12', 1234567891, NULL, '2024-02-14 16:17:25'),
(19, 'Sakshi Khude', 'sakshi@gamil.com', 'Sakshi@13', 1234567891, NULL, '2024-02-19 11:14:42'),
(20, 'Minal Shah', 'mina@gmail.com', 'Mina@123', 1232233223, NULL, '2024-03-24 09:38:32'),
(21, 'manisha Rane', 'manisha@gmail.com', 'Manu@123', 1234567853, '', '2024-05-07 06:22:11');

-- --------------------------------------------------------

--
-- Table structure for table `user_books`
--

CREATE TABLE `user_books` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `book_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `book_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`id`, `user_id`, `book_id`, `created_at`, `updated_at`) VALUES
(17, 10, 5, '2024-02-22 11:49:24', '2024-02-22 11:49:24'),
(18, 10, 2, '2024-02-22 11:53:11', '2024-02-22 11:53:11'),
(20, 10, 6, '2024-02-22 11:53:39', '2024-02-22 11:53:39'),
(21, 10, 6, '2024-02-22 12:05:03', '2024-02-22 12:05:03'),
(22, 10, 2, '2024-02-23 06:33:04', '2024-02-23 06:33:04'),
(23, 10, 2, '2024-02-23 06:33:20', '2024-02-23 06:33:20'),
(24, 10, 2, '2024-02-23 06:33:24', '2024-02-23 06:33:24'),
(26, 10, 19, '2024-03-06 09:24:53', '2024-03-06 09:24:53'),
(29, 17, 89, '2024-03-07 09:25:19', '2024-03-07 09:25:19'),
(30, 17, 89, '2024-03-07 09:25:30', '2024-03-07 09:25:30'),
(31, 17, 89, '2024-03-07 09:27:50', '2024-03-07 09:27:50'),
(32, 17, 89, '2024-03-07 09:27:55', '2024-03-07 09:27:55'),
(33, 17, 119, '2024-03-07 09:28:42', '2024-03-07 09:28:42'),
(34, 17, 120, '2024-03-07 09:41:57', '2024-03-07 09:41:57'),
(35, 11, 119, '2024-03-07 09:42:33', '2024-03-07 09:42:33'),
(38, 11, 120, '2024-03-07 09:49:53', '2024-03-07 09:49:53'),
(40, 11, 2, '2024-03-07 13:11:22', '2024-03-07 13:11:22'),
(45, 10, 119, '2024-03-22 04:47:38', '2024-03-22 04:47:38'),
(47, 14, 2, '2024-03-22 09:36:25', '2024-03-22 09:36:25'),
(51, 17, 10, '2024-03-23 08:32:13', '2024-03-23 08:32:13'),
(54, 14, 39, '2024-03-23 09:40:04', '2024-03-23 09:40:04'),
(56, 10, 67, '2024-03-25 17:16:16', '2024-03-25 17:16:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`b_id`),
  ADD KEY `s_id` (`s_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `book_id` (`book_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `membershipplans`
--
ALTER TABLE `membershipplans`
  ADD PRIMARY KEY (`plan_id`);

--
-- Indexes for table `plans`
--
ALTER TABLE `plans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `fk_membership_plan` (`plan_id`);

--
-- Indexes for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`s_id`),
  ADD KEY `c_id` (`c_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_books`
--
ALTER TABLE `user_books`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `book_id` (`book_id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `book_id` (`book_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `b_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `membershipplans`
--
ALTER TABLE `membershipplans`
  MODIFY `plan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `plans`
--
ALTER TABLE `plans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `user_books`
--
ALTER TABLE `user_books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `books_ibfk_1` FOREIGN KEY (`s_id`) REFERENCES `subcategories` (`s_id`) ON DELETE CASCADE;

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`book_id`) REFERENCES `books` (`b_id`);

--
-- Constraints for table `plans`
--
ALTER TABLE `plans`
  ADD CONSTRAINT `fk_membership_plan` FOREIGN KEY (`plan_id`) REFERENCES `membershipplans` (`plan_id`),
  ADD CONSTRAINT `plans_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD CONSTRAINT `subcategories_ibfk_1` FOREIGN KEY (`c_id`) REFERENCES `categories` (`c_id`) ON DELETE CASCADE;

--
-- Constraints for table `user_books`
--
ALTER TABLE `user_books`
  ADD CONSTRAINT `user_books_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_books_ibfk_2` FOREIGN KEY (`book_id`) REFERENCES `books` (`b_id`) ON DELETE CASCADE;

--
-- Constraints for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD CONSTRAINT `wishlist_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `wishlist_ibfk_2` FOREIGN KEY (`book_id`) REFERENCES `books` (`b_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
