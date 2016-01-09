<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Skill;
use App\Course;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();
		// $this->call('UserTableSeeder');
		
		$this->call('SkillsTableSeeder');
		$this->call('CourseTableSeeder');
		$this->call('ProjectTableSeeder');
	}
}

class ProjectTableSeeder extends Seeder {
	public function run() {
		//
	}
}

class CourseTableSeeder extends Seeder {
	public function run() {
		// year 1, term 1:
		$web = Course::create(['code' => 'WEBD 1000', 'name' => 'Website Development', 'alias' => 'web',
			'importance' => 0, 'grade' => 98.0, 'completion_date' => '2014-12-19',
			'topic_list' => 'XML, HTML 5, CSS 3, Web Layout Best Practices, Javascript Snippets',
			'description' => "This was my introductory web-coding course, where we learned to write Static Web Sites in HTML and CSS. We investigated some frameworks, but primarily created projects for this class from scratch."]);
		$network = Course::create(['code' => 'NETW 1100', 'name' => 'Introduction to Networking', 'alias' => 'network',
			'importance' => 0, 'grade' => 100.0, 'completion_date' => '2014-12-19',
			'topic_list' => 'OSI Model, TCP/IP, IPv4 and IPv6, Network Architecture',
			'description' => "This course provided a solid introduction to Networking concepts, and rough familiarity with the common protocols in common use."]);
		$dbIntro = Course::create(['code' => 'DBAS 1001', 'name' => 'Introduction to Databases', 'alias' => 'dbIntro',
			'importance' => 0, 'grade' => 99.0, 'completion_date' => '2014-12-19',
			'topic_list' => 'Relational Databases, Toad Data Modeler, MS Access, Database Design',
			'description' => "In this Introductory Database course, I learned the fundamentals of relational databases and database design. The course included use of VMWare, Toad Data Modeler, and MS Access."]);
		
		
		// year 1, term 2:
		$design = Course::create(['code' => 'APPD 1001', 'name' => 'User Interface Design', 'alias' => 'design',
			'importance' => 0, 'grade' => 99.0, 'completion_date' => '2015-04-30',
			'topic_list' => 'UI Best Practices, Mobile UI, Navigation Hierarchies, Adobe Products, Interface Testing',
			'description' => "In this course I learned to design interfaces for functional as well as visual appeal. We investigated functional layout of existing applications and looked at alternatives that may be preferred by users."]);
		$db = Course::create(['code' => 'DBAS 1100', 'name' => 'Database Development', 'alias' => 'db',
			'importance' => 0, 'grade' => 100.0, 'completion_date' => '2015-04-30',
			'topic_list' => 'Scripting and Querying, Entity Relationships, SQL functions, Inner/Outer Joins, Scalable Design',
			'description' => "In this course I learned how to design an Efficient, Scalable database. We learned to query easy-to-read information from across multiple tables using Joins and SQL functions."]);
		$linux = Course::create(['code' => 'OSYS 1000', 'name' => 'Operating Systems: Unix/Linux', 'alias' => 'linux',
			'importance' => 0, 'grade' => 100.0, 'completion_date' => '2015-04-30',
			'topic_list' => 'Installation Hierarchy, Shell Commands, Package Management, Scripting, VI/VIM Editor, Virtualization, Linux Networking',
			'description' => "This course introduced me the linux family of operating systems. I learned 'day-to-day' use and some scripting to handle large file structures. I also became familiar with the VIM text editor, and a small amount of Perl scripting."]);
		$oopIntro = Course::create(['code' => 'PROG 1400', 'name' => 'Intro to Object Oriented Programming', 'alias' => 'oopIntro',
			'importance' => 0, 'grade' => 99.0, 'completion_date' => '2015-04-30',
			'topic_list' => 'Object Inheritance, Abstraction, Polymorphism, Overrides and Implementation, Java Swing Applications',
			'description' => "In this course we used Eclipse to create Java Swing applications making use of Object Oriented Programming. Two notable projects were a screensaver implementing collision detection and smooth motion, and a combat simulation game with objects representing combatants and weapons of various sorts."]);
		$saad = Course::create(['code' => 'SAAD 1001', 'name' => 'System Analysis and Design', 'alias' => 'saad',
			'importance' => 0, 'grade' => 97.0, 'completion_date' => '2015-04-30',
			'topic_list' => 'Unified Modeling Language, Software Development Lifecycle, Use Cases, Test Cases, Sequence Diagrams, Class Diagrams',
			'description' => "In this course I learned the Unified Modeling Language suite of documents, including testing docs, use cases, and class and sequence diagrams. Agile methodologies and scrum were touched on."]);
		
		
		
		
		// year 2, term 1:
		$android = Course::create(['code' => 'APPD 2000', 'name' => 'Android Application Development', 'alias' => 'android',
			'importance' => 0, 'grade' => 97.0, 'completion_date' => '2015-12-18',
			'topic_list' => 'Mobile Interface Design, Activities and Intents, Data Persistence, SQLite, SDK Considerations',
			'description' => "I learned to create simple Android Apps using the Android Studio IDE. Coding in Java, we covered the Activity Lifecycle, Intents, Library Widgets, and Fragments.  Several working Apps were created, runnable both on device emulators and various physical devices."]);
		$php = Course::create(['code' => 'INET 2005', 'name' => 'Web Application Development', 'alias' => 'php',
			'importance' => 0, 'grade' => 100.0, 'completion_date' => '2015-12-18',
			'topic_list' => 'Php language, Php Frameworks (Laravel), Restful Architecture, Secure Login, MVC Architecture, N-tier Architecture, Ajax',
			'description' => "I learned all the necessary pieces to create working Php Web Applications either from scratch or using a framework. CRUD apps were a focus, and the final project was the creation of a full Content Management System with administrative Web-interface for backend work."]);
		$management = Course::create(['code' => 'INFT 2100', 'name' => 'Project Management', 'alias' => 'management',
			'importance' => 0, 'grade' => 100.0, 'completion_date' => '2015-12-18',
			'topic_list' => 'Agile Workflows, Scrum, Version Control, UML Documentation, Risk Management, Estimation, MS Project',
			'description' => "In Project Management I learned common practices and workflows for working on larger project in Information Technology. The course included research and applying learned techniques to school projects."]);
		$cplus = Course::create(['code' => 'PROG 2100', 'name' => 'Programming C++', 'alias' => 'cplus',
			'importance' => 0, 'grade' => 99.0, 'completion_date' => '2015-12-18',
			'topic_list' => 'C++ Language, Memory Management, Efficient Computation, Minimax Algorithm',
			'description' => "In the C++ course I learned the principles of Memory Management, how to apply Destructors/Copy Constructors/Assignment Overrides to catch Memory Leaks, and how to use poiters to cut down on unnecessary duplication of objects. The assignments included some Algorithm design, and the Minimax Strategy for turn based games."]);
		$j2ee = Course::create(['code' => 'WEBD 3102', 'name' => 'J2EE: Java Web Applications', 'alias' => 'j2ee',
			'importance' => 0, 'grade' => 100.0, 'completion_date' => '2015-12-18',
			'topic_list' => 'Apache Servers, Eclipse Mars, Servlets and Filters, .jsp Files, Tag Libraries, Concurrency',
			'description' => "In this course, I learned the building blocks of a Java Web Application, and how to apply them to an Apache server from the Eclipse Mars IDE. Topics included backend Java Models, Servlet Controllers, Filters, .jsp Views, and Session vs Request Lifecycle."]);
		
		////////////////////////////////////
		// Associate skills with each course
		////////////////////////////////////
		$skills = Skill::lists('id', 'alias');
		
		$android->skills()->attach([$skills['java'], $skills['android'], $skills['sqlite'], $skills['ui']]);
		$php->skills()->attach([$skills['php'], $skills['laravel'], $skills['js'], $skills['database'], $skills['git'], $skills['mvc'], $skills['phpstorm'], $skills['bash']]);
		$management->skills()->attach([$skills['agile'], $skills['scrum'], $skills['uml'], $skills['office'], $skills['comm'], $skills['elearn']]);
		$cplus->skills()->attach([$skills['cplus'], $skills['vstudio'], $skills['algorithm'], $skills['oop'], $skills['uml'], $skills['elearn']]);
		$j2ee->skills()->attach([$skills['j2ee'], $skills['java'], $skills['eclipse'], $skills['mvc'], $skills['elearn']]);
		
		$design->skills()->attach([$skills['ui'], $skills['comm'], $skills['css']]);
		$db->skills()->attach([$skills['sql'], $skills['mysql'], $skills['vmware']]);
		$linux->skills()->attach([$skills['bash'], $skills['vim'], $skills['putty']]);
		$oopIntro->skills()->attach([$skills['oop'], $skills['java'], $skills['eclipse'], $skills['algorithm'], $skills['math']]);
		$saad->skills()->attach([$skills['uml'], $skills['office'], $skills['agile'], $skills['scrum'], $skills['algorithm']]);
		
		$web->skills()->attach([$skills['html'], $skills['css'], $skills['js']]);
		$network->skills()->attach([$skills['elearn'], $skills['math'], $skills['algorithm']]);
		$dbIntro->skills()->attach([$skills['office'], $skills['algorithm'], $skills['vmware']]);
	}
}

class SkillsTableSeeder extends Seeder {
	public function run() {
		// Coding languages
		$php = Skill::create(['name' => 'Php',	'importance' => 8, 'alias' => 'php', 'description' => 'A web coding language',
							  'experience' => "I've dabbled in Php since 2012.  Since then I've had several courses, and summer workterm primarily devoted to Php.  This website is mainly written in Php."]);
		$java = Skill::create(['name' => 'Java', 'importance' => 8, 'alias' => 'java', 'description' => 'The Java programming language',
							   'experience' => "The first language I learned, I have since had extensive coursework using Java for various purposes, including J2EE, Android development and Swing Applications."]);
		$cplus = Skill::create(['name' => 'C++', 'importance' => 8, 'alias' => 'cplus', 'description' => 'The C++ programming language',
							   'experience' => "I've used C++ for foundational coding throughout my entire final year at Nova Scotia Community College."]);
		$python = Skill::create(['name' => 'Python', 'importance' => 5, 'alias' => 'python', 'description' => 'A fasionable, readable programming language',
							   'experience' => "Python is my favorite language. I taught Python to myself, and furthered my knowledge by completing several Coursera courses run by the Faculty and Rice University."]);
		$js = Skill::create(['name' => 'JavaScript', 'importance' => 8, 'alias' => 'js', 'description' => 'The client-side scripting language for browsers',
							   'experience' => "I have a long history of dabbling with Javascript (and its extentions and libraries) to enhance personal web projects.  Javascript has been used and taught in several of my college courses."]);
		$html = Skill::create(['name' => 'HTML', 'importance' => 2, 'alias' => 'html', 'description' => 'Hypertext Markup Language - the XML based web language',
							   'experience' => "I am comfortable with creating my own Html, or working with templating engines or dynamic creation."]);
		$css = Skill::create(['name' => 'CSS', 'importance' => 2, 'alias' => 'css', 'description' => 'The core web styling language',
							   'experience' => "I've been creating my own css stylesheets for several years.  Though I am familiar with frameworks like bootstrap, I prefer the fresh appearance of creating custom css for each project."]);
		$jquery = Skill::create(['name' => 'jQuery', 'importance' => 5, 'alias' => 'jquery', 'description' => 'The essential JavaScript enhancement package',
							   'experience' => "I enjoy using core jquery along with some minor mathematics to create animations and effects.  I'm also familiar with use of existing jQuery packages."]);
		$sql = Skill::create(['name' => 'SQL', 'importance' => 5, 'alias' => 'sql', 'description' => 'The core database language',
							   'experience' => "I can write reasonably complicated SQL queries (including functions, joins, etc) to extract readable data from a database.  I first learned SQL several years ago and have had several courses use it at NSCC."]);
		$bash = Skill::create(['name' => 'Bash', 'importance' => 5, 'alias' => 'bash', 'description' => 'Terminal commands for linux machines, including simple scripting',
							   'experience' => "I can manage myself in most bash shells, including linux machines with no desktop.  My Summer workterm involves substantial work in a large folder structure accessed only via terminal and bash."]);
		
		// Software and platforms
		$office = Skill::create(['name' => 'Microsoft Office', 'alias' => 'office', 'description' => 'Office products including Word, Excel, Access, Powerpoint, Visio and MS Project',
							   'experience' => "My time at NSCC has expanded my MS Office Experience from only Word and Excel to include Access, Visio, MS Project and others."]);
		$eclipse = Skill::create(['name' => 'Eclipse IDE', 'importance' => 5, 'alias' => 'eclipse', 'description' => 'A development environment',
							   'experience' => "I have extensive time writing Java in Eclipse, including console or swing applications, and management of a Web-Application through an Apache server."]);
		$j2ee = Skill::create(['name' => 'J2EE/Eclipse Mars', 'importance' => 5, 'alias' => 'j2ee', 'description' => 'Java Enterprise Edition, for creating Java Web applications in the Eclipse environment',
							   'experience' => "I have experience attaching my Eclipse IDE to an Apach Server and managing several Web Applications through it, including multiple Servlets, Filters, etc."]);
		$vstudio = Skill::create(['name' => 'Visual Studio', 'importance' => 5, 'alias' => 'vstudio', 'description' => 'A development environment',
							   'experience' => "I have used Visual Studio for several large projects and in multiple languages including C++ and Python."]);
		$android = Skill::create(['name' => 'Android Studio', 'importance' => 5, 'alias' => 'android', 'description' => 'The official Android development environment',
							   'experience' => "I have used Android Studio to create simple Apps, and successfully run them in both created Emulators and physical devices."]);
		$phpstorm = Skill::create(['name' => 'Php Storm', 'importance' => 5, 'alias' => 'phpstorm', 'description' => 'An development environment for Php applications',
							   'experience' => "I have experience using PhpStorm to create Php projects from scratch, and also composer Laravel installations."]);
		$komodo = Skill::create(['name' => 'Komodo IDE', 'alias' => 'komodo', 'description' => 'A lightweight developement environment good for remote access',
							   'experience' => "I use the Komodo IDE when I need a graphical editor for projects stored remotely on a machine with no graphical desktop."]);
		$putty = Skill::create(['name' => 'PuTTY', 'importance' => 5, 'alias' => 'putty', 'description' => 'A secure shell / telnet client for Windows',
							   'experience' => "I was introduced to PuTTY by IBM's Master the Mainframe competition, and have since found it invaluable for accessing linux servers from windows machines."]);
		$laravel = Skill::create(['name' => 'Laravel', 'importance' => 4, 'alias' => 'laravel', 'description' => 'An MVC framework for PHP web-applications',
							   'experience' => "I have completed several 'Laracast' tutorials, and created Laravel Websites both in and out of the classroom.  This website is created using Laravel."]);
		$git = Skill::create(['name' => 'Git / Github', 'importance' => 6, 'alias' => 'git', 'description' => 'The version control system and widely used online repository',
							   'experience' => "I spent a summer work-term using Git for version control, and have since been able to use it in both private and collaborative student projects.  Much of my work and history is available on github, username: 'arbuthnott'."]);
		$vim = Skill::create(['name' => 'Vim Editor', 'alias' => 'vim', 'description' => 'The bare-bones (but always present) Linux text editor',
							   'experience' => "I had a brief introduction to vi/vim at an NSCC course, and then firmed up my ability over a summer work-term where I created and managed large amounts of code using only vim."]);
		$mysql = Skill::create(['name' => 'MySQL', 'importance' => 3, 'alias' => 'mysql', 'description' => 'The popular data-platform, including phpMyAdmin for browser access',
							   'experience' => "I have several years experience working with MySQL databases both in and out of the classroom.  My experience includes interfacing via Php code, and management through phpmyadmin in a browser."]);
		$sqlite = Skill::create(['name' => 'SQLite', 'importance' => 3, 'alias' => 'sqlite', 'description' => 'The file-based SQL data-platform',
							   'experience' => "I have been using SQLite databases throughout my second year at NSCC as a simple, protable database alternative."]);
		$vmware = Skill::create(['name' => 'VMWare', 'importance' => 3, 'alias' => 'vmware', 'description' => 'Software for creating and using Virtual Machines',
							   'experience' => "I have used Virtual Machines almost continuously over two years at NSCC.  I am familiar with the creation and use of both Windows and Linux Machines."]);
		$phab = Skill::create(['name' => 'Phabricator/Arcanist', 'alias' => 'phab', 'description' => 'A ticketing, documentation and change-management platform for business',
							   'experience' => "I spent a summer work-term at a company where Phabricator was used extensively - for task ticketing and documentation, and as a git-wrapper for version control (through Arcanist)."]);

		// Other technical Skills
		$math = Skill::create(['name' => 'Mathematics', 'importance' => 6, 'alias' => 'math', 'description' => 'Comfort with numerical methods and their uses',
							   'experience' => "My history includes a Master's degree in Mathematics from the University of Waterloo.  In software design, I make regular use of my aptitude for numbers and logical design."]);
		$algorithm = Skill::create(['name' => 'Algorithm Design', 'importance' => 6, 'alias' => 'algorithm', 'description' => 'Design of logical, iterative methods to acheive desired results',
							   'experience' => "My history in Abstract Math gives me a good sense of how to use recursion, iteration, and heuristic statistics to achieve effects in OOP, visual effects, or data analysis."]);
		$mvc = Skill::create(['name' => 'MVC Architecture', 'importance' => 4, 'alias' => 'mvc', 'description' => 'The Model/View/Controller method of application design',
							   'experience' => "I have had the chance to code MVC applications both from scratch and using the Laravel Framework.  I appreciate the design principles, and continue to use them in personal projects."]);
		$oop = Skill::create(['name' => 'OOP', 'importance' => 4, 'alias' => 'oop', 'description' => 'Object Oriented Programming',
							   'experience' => "I have been using Objects and OOP principles since I first learned to code.  Though I use 'functional' logic when appropriate, I appreciate what OOP can offer.  I have used OOP particularly often for school projects and in game designs."]);
		$database = Skill::create(['name' => 'Database Design', 'importance' => 4, 'alias' => 'database', 'description' => 'Design of efficient and functional relational databases',
							   'experience' => "I appreciate the efficiency and scalability of well designed databases.  Over a summer workterm I was able to design a MySQL database meant to collate data on user events several thousand times daily, and efficient storage was a particular concern."]);
		
		// Soft skills / Other
		$uml = Skill::create(['name' => 'UML Documentation', 'importance' => 3, 'alias' => 'uml', 'description' => 'Code and interface documentation including Unified Modelling Language diagrams',
							   'experience' => "At NSCC, I took a course devoted to UML methods of documentation, and I have been able to implement those methods in my other courses and over my summer work-term."]);
		$comm = Skill::create(['name' => 'Communication', 'importance' => 0, 'alias' => 'comm', 'description' => 'Written, remote and in person communication skills',
							   'experience' => "I have a long history of being a 'front-line' employee, and I have excellent communication skills, including both written and face-to-face communication."]);
		$elearn = Skill::create(['name' => 'E-Learning', 'importance' => 0, 'alias' => 'elearn', 'description' => 'Ability to learn independantly and from online sources',
							   'experience' => "I have independantly learned many skills from online tutorials (java and python for example), and am comfortable conducting research and learning from what I find."]);
		$ui = Skill::create(['name' => 'User Interface Design', 'importance' => 0, 'alias' => 'ui', 'description' => 'Methods to design simple, pleasing user interfaces',
							   'experience' => "I enjoy 'polishing' my projects to be easy to use and pleasing to look at.  My time at NSCC includes a course in good user interface design."]);
		$agile = Skill::create(['name' => 'Agile Workflow', 'importance' => 4, 'alias' => 'agile', 'description' => 'Iterative, adaptive methods of software design and implementation',
							   'experience' => "I am familiar with Agile project management methods."]);
		$scrum = Skill::create(['name' => 'Scrum Workflow', 'importance' => 4, 'alias' => 'scrum', 'description' => 'Knowledge of Scrum roles and project methods',
							   'experience' => "I am familiar with Scrum Project Methodology, and understand the requirements of the various roles and artifacts."]);
		
		// Now attach some related skills.
		$php->relatedSkills()->attach([$laravel->id, $phpstorm->id, $mysql->id, $mvc->id]);
		$java->relatedSkills()->attach([$j2ee->id, $eclipse->id, $oop->id, $android->id]);
		$cplus->relatedSkills()->attach([$vstudio->id, $oop->id, $algorithm->id]);
		$python->relatedSkills()->attach([$vstudio->id, $oop->id]);
		$js->relatedSkills()->attach([$jquery->id, $html->id, $css->id, $ui->id]);
		$html->relatedSkills()->attach([$css->id, $js->id, $ui->id]);
		$css->relatedSkills()->attach([$html->id, $js->id, $jquery->id, $ui->id]);
		$jquery->relatedSkills()->attach([$js->id, $html->id, $css->id, $math->id]);
		$sql->relatedSkills()->attach([$database->id, $mysql->id, $sqlite->id]);
		$bash->relatedSkills()->attach([$putty->id, $vim->id, $git->id, $laravel->id]);
		
		$office->relatedSkills()->attach([$uml->id, $comm->id, $scrum->id]);
		$eclipse->relatedSkills()->attach([$j2ee->id, $java->id, $vstudio->id, $komodo->id]);
		$j2ee->relatedSkills()->attach([$java->id, $eclipse->id]);
		$vstudio->relatedSkills()->attach([$cplus->id, $python->id, $eclipse->id, $komodo->id]);
		$android->relatedSkills()->attach([$java->id, $eclipse->id, $ui->id, $oop->id]);
		$phpstorm->relatedSkills()->attach([$php->id, $laravel->id, $eclipse->id, $vstudio->id]);
		$komodo->relatedSkills()->attach([$putty->id, $eclipse->id, $vstudio->id]);
		$putty->relatedSkills()->attach([$bash->id, $komodo->id, $vim->id]);
		$laravel->relatedSkills()->attach([$php->id, $mvc->id, $phpstorm->id]);
		$git->relatedSkills()->attach([$comm->id, $bash->id]);
		$vim->relatedSkills()->attach([$bash->id, $git->id]);
		$mysql->relatedSkills()->attach([$database->id, $sql->id, $sqlite->id, $php->id]);
		$sqlite->relatedSkills()->attach([$database->id, $sql->id, $sqlite->id]);
		$vmware->relatedSkills()->attach([$elearn->id]);
		$phab->relatedSkills()->attach([$git->id, $bash->id, $agile->id, $scrum->id]);
		
		$math->relatedSkills()->attach([$algorithm->id, $oop->id, $database->id]);
		$algorithm->relatedSkills()->attach([$math->id, $oop->id, $database->id]);
		$mvc->relatedSkills()->attach([$laravel->id, $php->id, $oop->id]);
		$oop->relatedSkills()->attach([$java->id, $algorithm->id, $cplus->id]);
		$database->relatedSkills()->attach([$sql->id, $mysql->id, $sqlite->id, $uml->id]);
		
		$uml->relatedSkills()->attach([$comm->id, $database->id, $oop->id, $ui->id]);
		$comm->relatedSkills()->attach([$uml->id, $elearn->id, $office->id]);
		$elearn->relatedSkills()->attach([$comm->id]);
		$ui->relatedSkills()->attach([$comm->id, $html->id, $css->id]);
		$agile->relatedSkills()->attach([$scrum->id, $comm->id, $elearn->id]);
		$scrum->relatedSkills()->attach([$agile->id, $comm->id, $uml->id]);
		
	}
}
