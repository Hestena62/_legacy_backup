<?php
// --- Page Configuration ---
$pageTitle = "Common Core Standards Guide";
$pageDescription = "A simplified, accessible guide to Common Core State Standards (CCSS) for students and parents.";
$pageKeywords = "CCSS, Common Core, Education Standards, Math Standards, ELA Standards, Special Education";
$pageAuthor = "Hesten's Learning";

// --- Dynamic Example Generator ---
function getStandardExample($std) {
    if (!isset($std['text']) || !isset($std['category']) || !isset($std['grade'])) return "No example available.";
    
    $text = strtolower($std['text']);
    $cat = strtolower($std['category']);
    $grade = (string)$std['grade'];

    // Math heuristics
    if (strpos($text, 'add') !== false || strpos($text, 'subtract') !== false) {
        return "Example: If you have 5 apples and get 3 more, how many do you have? You can use blocks to show adding them together.";
    }
    if (strpos($text, 'multiply') !== false || strpos($text, 'divide') !== false) {
        return "Example: Sharing 12 cookies equally among 3 friends, or calculating the total if 4 students each have 5 pencils.";
    }
    if (strpos($text, 'fraction') !== false) {
        return "Example: Cutting a pizza into 8 slices and realizing that 4 slices is the same as half of the pizza (4/8 = 1/2).";
    }
    if (strpos($cat, 'geometry') !== false || strpos($text, 'shape') !== false || strpos($text, 'triangle') !== false) {
        return "Example: Looking at objects in the real world (like a stop sign being an octagon) or calculating the area of a rectangular garden.";
    }
    if (strpos($cat, 'algebra') !== false || strpos($text, 'equation') !== false || strpos($text, 'expression') !== false) {
        return "Example: Writing an equation like '2x + 5 = 15' to figure out an unknown number of items (x) in a real-world scenario.";
    }
    if (strpos($cat, 'function') !== false) {
        return "Example: A function machine where putting in a number (x) always gives out a specific number (y), like a taxi fare that charges $2 per mile.";
    }
    if (strpos($cat, 'statistics') !== false || strpos($text, 'data') !== false) {
        return "Example: Creating a bar graph of your classmates' favorite colors, or finding the average (mean) test score in a class.";
    }
    if (strpos($cat, 'measurement') !== false || strpos($text, 'length') !== false || strpos($text, 'weight') !== false) {
        return "Example: Using a ruler to measure the length of your desk in inches, or comparing the weight of a book and an apple.";
    }
    if (strpos($text, 'count') !== false) {
        return "Example: Counting aloud from 1 to 100, or practicing counting by tens (10, 20, 30...) using a number chart.";
    }
    if (strpos($cat, 'ratio') !== false || strpos($text, 'proport') !== false) {
        return "Example: If a recipe calls for 2 cups of sugar for every 3 cups of flour, making a double batch requires applying the 2:3 ratio.";
    }
    
    // ELA heuristics
    if (strpos($cat, 'literature') !== false || strpos($text, 'story') !== false) {
        return "Example: Reading 'Charlotte\'s Web' and explaining why the main character acted a certain way using quotes from the book.";
    }
    if (strpos($cat, 'informational') !== false || strpos($text, 'evidence') !== false) {
        return "Example: Reading a science article about space and highlighting three facts that prove the author's main point.";
    }
    if (strpos($cat, 'writing') !== false) {
        return "Example: Writing a persuasive letter to the principal about why the school needs a longer recess, complete with clear reasons and an introduction.";
    }
    
    // Grade fallbacks
    if ($grade === 'K' || $grade === '1' || $grade === '2') {
        return "Example: Using physical objects like counting bears or drawings to visually show how the math works before writing numbers.";
    }
    if ($grade === '3' || $grade === '4' || $grade === '5') {
        return "Example: Solving a multi-step word problem, like figuring out how much change you get back after buying items at a store.";
    }
    if ($grade === '6' || $grade === '7' || $grade === '8') {
        return "Example: Applying the concept to a real-world scenario, such as calculating the discount on a jacket on sale or understanding a bank account balance.";
    }
    if ($grade === 'HS') {
        return "Example: Using this advanced concept to solve complex problems, such as modeling population growth or projecting future costs.";
    }

    return "Example: A teacher might ask a student to apply this standard by solving a practical, real-world problem or explaining their reasoning aloud.";
}

// --- Mock Data: CCSS Standards ---
// In a real app, this might come from a database.
// Structure: [Code, Grade, Subject, Official Text, Plain English Explanation]
$standards = [
    // KINDERGARTEN MATH
    [
        'code' => 'CCSS.MATH.CONTENT.K.CC.A.1',
        'grade' => 'K',
        'subject' => 'Math',
        'category' => 'Counting & Cardinality',
        'text' => 'Count to 100 by ones and by tens.',
        'explanation' => 'Students should be able to count out loud from 1 to 100. They should also be able to count by tens (10, 20, 30...) up to 100.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.K.OA.A.1',
        'grade' => 'K',
        'subject' => 'Math',
        'category' => 'Operations & Algebraic Thinking',
        'text' => 'Represent addition and subtraction with objects, fingers, mental images, drawings, sounds, acting out situations, verbal explanations, expressions, or equations.',
        'explanation' => 'Show math using real things! Use fingers, blocks, or drawings to show what happens when you add things together or take them away.'
    ],
    // GRADE 5 ELA
    [
        'code' => 'CCSS.ELA-LITERACY.RL.5.2',
        'grade' => '5',
        'subject' => 'ELA',
        'category' => 'Reading: Literature',
        'text' => 'Determine a theme of a story, drama, or poem from details in the text, including how characters in a story or drama respond to challenges or how the speaker in a poem reflects upon a topic; summarize the text.',
        'explanation' => 'Read a story and figure out the "big idea" or lesson. Look at how characters handle problems to understand the message. Be able to retell the story in your own words.'
    ],
    // GRADE 8 MATH
    [
        'code' => 'CCSS.MATH.CONTENT.8.EE.A.1',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Expressions & Equations',
        'text' => 'Know and apply the properties of integer exponents to generate equivalent numerical expressions.',
        'explanation' => 'Understand how powers (exponents) work. For example, know that 3² means 3 times 3, and be able to solve problems using these rules.'
    ],
    // HIGH SCHOOL MATH
    [
        'code' => 'CCSS.MATH.CONTENT.HSF.IF.A.1',
        'grade' => 'HS',
        'subject' => 'Math',
        'category' => 'Functions',
        'text' => 'Understand that a function from one set (called the domain) to another set (called the range) assigns to each element of the domain exactly one element of the range.',
        'explanation' => 'Learn that a function is like a machine: if you put one specific number in, you get exactly one specific answer out. It never gives two different answers for the same input.'
    ],
    // HIGH SCHOOL ELA
    [
        'code' => 'CCSS.ELA-LITERACY.RI.9-10.1',
        'grade' => 'HS',
        'subject' => 'ELA',
        'category' => 'Reading: Informational Text',
        'text' => 'Cite strong and thorough textual evidence to support analysis of what the text says explicitly as well as inferences drawn from the text.',
        'explanation' => 'When you make a claim about something you read, prove it! Point to the exact sentences in the text that support your idea, both for things directly stated and things you figured out (inferred).'
    ]
,
    [
        'code' => 'CCSS.MATH.CONTENT.K.CC.1',
        'grade' => 'K',
        'subject' => 'Math',
        'category' => 'Counting and Cardinality',
        'text' => 'Count	to	100	by	ones	and	by	tens.',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.K.CC.2',
        'grade' => 'K',
        'subject' => 'Math',
        'category' => 'Counting and Cardinality',
        'text' => 'Count	forward	beginning	from	a	given	number	within	the	known',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.K.CC.3',
        'grade' => 'K',
        'subject' => 'Math',
        'category' => 'Counting and Cardinality',
        'text' => 'Write	numbers	from	0	to	20.	Represent	a	number	of	objects	with	a',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.K.CC.4',
        'grade' => 'K',
        'subject' => 'Math',
        'category' => 'Counting and Cardinality',
        'text' => 'Understand	the	relationship	between	numbers	and	quantities;	connect',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.K.CC.5',
        'grade' => 'K',
        'subject' => 'Math',
        'category' => 'Counting and Cardinality',
        'text' => 'Count	to	answer	“how	many?”	questions	about	as	many	as	20	things',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.K.CC.6',
        'grade' => 'K',
        'subject' => 'Math',
        'category' => 'Counting and Cardinality',
        'text' => 'Identify	whether	the	number	of	objects	in	one	group	is	greater	than,',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.K.CC.1',
        'grade' => 'K',
        'subject' => 'Math',
        'category' => 'Counting and Cardinality',
        'text' => 'Represent	addition	and	subtraction	with	objects,	fingers,	mental',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.K.CC.2',
        'grade' => 'K',
        'subject' => 'Math',
        'category' => 'Counting and Cardinality',
        'text' => 'Solve	addition	and	subtraction	word	problems,	and	add	and	subtract',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.K.CC.3',
        'grade' => 'K',
        'subject' => 'Math',
        'category' => 'Counting and Cardinality',
        'text' => 'Decompose	numbers	less	than	or	equal	to	10	into	pairs	in	more',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.K.CC.4',
        'grade' => 'K',
        'subject' => 'Math',
        'category' => 'Counting and Cardinality',
        'text' => 'For	any	number	from	1	to	9,	find	the	number	that	makes	10	when',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.K.CC.5',
        'grade' => 'K',
        'subject' => 'Math',
        'category' => 'Counting and Cardinality',
        'text' => 'Fluently	add	and	subtract	within	5.',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.K.CC.1',
        'grade' => 'K',
        'subject' => 'Math',
        'category' => 'Counting and Cardinality',
        'text' => 'Compose	and	decompose	numbers	from	11	to	19	into	ten	ones	and',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.K.CC.1',
        'grade' => 'K',
        'subject' => 'Math',
        'category' => 'Counting and Cardinality',
        'text' => 'Describe	measurable	attributes	of	objects,	such	as	length	or	weight.',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.K.CC.2',
        'grade' => 'K',
        'subject' => 'Math',
        'category' => 'Counting and Cardinality',
        'text' => 'Directly	compare	two	objects	with	a	measurable	attribute	in	common,',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.K.CC.3',
        'grade' => 'K',
        'subject' => 'Math',
        'category' => 'Counting and Cardinality',
        'text' => 'Classify	objects	into	given	categories;	count	the	numbers	of	objects	in',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.K.G.1',
        'grade' => 'K',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Describe	objects	in	the	environment	using	names	of	shapes,	and',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.K.G.2',
        'grade' => 'K',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Correctly	name	shapes	regardless	of	their	orientations	or	overall	size.',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.K.G.3',
        'grade' => 'K',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Identify	shapes	as	two-dimensional	(lying	in	a	plane,	“flat”)	or	three-',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.K.G.4',
        'grade' => 'K',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Analyze	and	compare	two-	and	three-dimensional	shapes,	in',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.K.G.5',
        'grade' => 'K',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Model	shapes	in	the	world	by	building	shapes	from	components	(e.g.,',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.K.G.6',
        'grade' => 'K',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Compose	simple	shapes	to	form	larger	shapes.	For example, “Can you',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.K.G.20',
        'grade' => '1',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'By	comparing	a	variety	of	solution	strategies,	children	build	their',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.K.G.1',
        'grade' => '1',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Make	sense	of	problems	and	persevere	in',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.K.G.2',
        'grade' => '1',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Reason	abstractly	and	quantitatively.',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.K.G.3',
        'grade' => '1',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Construct	viable	arguments	and	critique',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.K.G.4',
        'grade' => '1',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Model	with	mathematics.',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.K.G.5',
        'grade' => '1',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Use	appropriate	tools	strategically.',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.K.G.6',
        'grade' => '1',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Attend	to	precision.',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.K.G.8',
        'grade' => '1',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Look	for	and	express	regularity	in	repeated',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.K.G.1',
        'grade' => '1',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Use	addition	and	subtraction	within	20	to	solve	word	problems	involving',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.K.G.2',
        'grade' => '1',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Solve	word	problems	that	call	for	addition	of	three	whole	numbers',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.K.G.3',
        'grade' => '1',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Apply	properties	of	operations	as	strategies	to	add	and	subtract. 3 	Examples:',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.K.G.4',
        'grade' => '1',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Understand	subtraction	as	an	unknown-addend	problem.	For example,',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.K.G.5',
        'grade' => '1',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Relate	counting	to	addition	and	subtraction	(e.g.,	by	counting	on	2	to',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.K.G.6',
        'grade' => '1',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Add 	and 	subtract 	within 	20, 	demonstrating 	fluency 	for 	addition 	and',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.K.G.8',
        'grade' => '1',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Determine 	the 	unknown 	whole 	number 	in 	an 	addition 	or 	subtraction',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.K.G.1',
        'grade' => '1',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Count	to	120,	starting	at	any	number	less	than	120.	In	this	range,	read',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.K.G.2',
        'grade' => '1',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Understand	 that	 the	 two	 digits	 of	 a	 two-digit	 number	 represent	 amounts',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.K.G.3',
        'grade' => '1',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Compare 	two 	two-digit 	numbers 	based 	on 	meanings 	of 	the 	tens 	and 	ones',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.K.G.4',
        'grade' => '1',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Add 	within 	100, 	including 	adding 	a 	two-digit 	number 	and 	a 	one-digit',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.K.G.5',
        'grade' => '1',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Given	a	two-digit	number,	mentally	find	10	more	or	10	less	than	the',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.K.G.6',
        'grade' => '1',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Subtract	multiples	of	10	in	the	range	10-90	from	multiples	of	10	in	the',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.K.G.1',
        'grade' => '1',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Order	three	objects	by	length;	compare	the	lengths	of	two	objects',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.K.G.2',
        'grade' => '1',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Express	the	length	of	an	object	as	a	whole	number	of	length	units,	by',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.K.G.3',
        'grade' => '1',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'T ell	and	write	time	in	hours	and	half-hours	using	analog	and	digital',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.K.G.4',
        'grade' => '1',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Organize,	represent,	and	interpret	data	with	up	to	three	categories;	ask',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.1.G.1',
        'grade' => '1',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Distinguish	between	defining	attributes	(e.g.,	triangles	are	closed	and',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.1.G.2',
        'grade' => '1',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Compose	two-dimensional	shapes	(rectangles,	squares,	trapezoids,',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.1.G.3',
        'grade' => '1',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Partition	circles	and	rectangles	into	two	and	four	equal	shares,	describe',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.1.G.1',
        'grade' => '2',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Make	sense	of	problems	and	persevere	in',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.1.G.2',
        'grade' => '2',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Reason	abstractly	and	quantitatively.',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.1.G.3',
        'grade' => '2',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Construct	viable	arguments	and	critique',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.1.G.4',
        'grade' => '2',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Model	with	mathematics.',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.1.G.5',
        'grade' => '2',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Use	appropriate	tools	strategically.',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.1.G.6',
        'grade' => '2',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Attend	to	precision.',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.1.G.8',
        'grade' => '2',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Look	for	and	express	regularity	in	repeated',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.1.G.1',
        'grade' => '2',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Use	addition	and	subtraction	within	100	to	solve	one-	and	two-step',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.1.G.2',
        'grade' => '2',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Fluently	add	and	subtract	within	20	using	mental	strategies. 2 	By	end	of',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.1.G.3',
        'grade' => '2',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Determine	whether	a	group	of	objects	(up	to	20)	has	an	odd	or	even',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.1.G.4',
        'grade' => '2',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Use	addition	to	find	the	total	number	of	objects	arranged	in',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.1.G.1',
        'grade' => '2',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Understand	that	the	three	digits	of	a	three-digit	number	represent',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.1.G.2',
        'grade' => '2',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Count	within	1000;	skip-count	by	5s,	10s,	and	100s.',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.1.G.3',
        'grade' => '2',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Read	and	write	numbers	to	1000	using	base-ten	numerals,	number',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.1.G.4',
        'grade' => '2',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Compare	two	three-digit	numbers	based	on	meanings	of	the	hundreds,',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.1.G.5',
        'grade' => '2',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Fluently	add	and	subtract	within	100	using	strategies	based	on	place',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.1.G.6',
        'grade' => '2',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Add	up	to	four	two-digit	numbers	using	strategies	based	on	place',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.1.G.8',
        'grade' => '2',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Mentally	add	10	or	100	to	a	given	number	100–900,	and	mentally',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.1.G.9',
        'grade' => '2',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Explain	why	addition	and	subtraction	strategies	work,	using	place	value',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.1.G.1',
        'grade' => '2',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Measure	the	length	of	an	object	by	selecting	and	using	appropriate',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.1.G.2',
        'grade' => '2',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Measure	the	length	of	an	object	twice,	using	length	units	of',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.1.G.3',
        'grade' => '2',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Estimate	lengths	using	units	of	inches,	feet,	centimeters,	and	meters.',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.1.G.4',
        'grade' => '2',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Measure	to	determine	how	much	longer	one	object	is	than	another,',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.1.G.5',
        'grade' => '2',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Use	addition	and	subtraction	within	100	to	solve	word	problems',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.1.G.6',
        'grade' => '2',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Represent	whole	numbers	as	lengths	from	0	on	a	number	line	diagram',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.1.G.8',
        'grade' => '2',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Solve	word	problems	involving	dollar	bills,	quarters,	dimes,	nickels,	and',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.1.G.9',
        'grade' => '2',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Generate	measurement	data	by	measuring	lengths	of	several	objects',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.1.G.10',
        'grade' => '2',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Draw	a	picture	graph	and	a	bar	graph	(with	single-unit	scale)	to',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.2.G.1',
        'grade' => '2',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Recognize	and	draw	shapes	having	specified	attributes,	such	as	a	given',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.2.G.2',
        'grade' => '2',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Partition	a	rectangle	into	rows	and	columns	of	same-size	squares	and',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.2.G.3',
        'grade' => '2',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Partition	circles	and	rectangles	into	two,	three,	or	four	equal	shares,',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.2.G.1',
        'grade' => '2',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Make	sense	of	problems	and	persevere	in',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.2.G.2',
        'grade' => '2',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Reason	abstractly	and	quantitatively.',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.2.G.3',
        'grade' => '2',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Construct	viable	arguments	and	critique',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.2.G.4',
        'grade' => '2',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Model	with	mathematics.',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.2.G.5',
        'grade' => '2',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Use	appropriate	tools	strategically.',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.2.G.6',
        'grade' => '2',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Attend	to	precision.',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.2.G.8',
        'grade' => '2',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Look	for	and	express	regularity	in	repeated',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.2.G.1',
        'grade' => '2',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Make	sense	of	problems	and	persevere	in',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.2.G.2',
        'grade' => '2',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Reason	abstractly	and	quantitatively.',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.2.G.3',
        'grade' => '2',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Construct	viable	arguments	and	critique',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.2.G.4',
        'grade' => '2',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Model	with	mathematics.',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.2.G.5',
        'grade' => '2',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Use	appropriate	tools	strategically.',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.2.G.6',
        'grade' => '2',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Attend	to	precision.',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.2.G.8',
        'grade' => '2',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Look	for	and	express	regularity	in	repeated',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.2.G.1',
        'grade' => '2',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Interpret	products	of	whole	numbers,	e.g.,	interpret	5	×	7	as	the	total',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.2.G.2',
        'grade' => '2',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Interpret	whole-number	quotients	of	whole	numbers,	e.g.,	interpret',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.2.G.4',
        'grade' => '2',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Determine	the	unknown	whole	number	in	a	multiplication	or	division',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.2.G.5',
        'grade' => '2',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Apply	properties	of	operations	as	strategies	to	multiply	and',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.2.G.8',
        'grade' => '2',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Solve	two-step	word	problems	using	the	four	operations.	Represent',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.2.G.9',
        'grade' => '2',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Identify	arithmetic	patterns	(including	patterns	in	the	addition	table	or',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.2.G.1',
        'grade' => '2',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Use 	place 	value 	understanding 	to 	round 	whole 	numbers 	to 	the 	nearest',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.2.G.2',
        'grade' => '2',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Fluently 	add 	and 	subtract 	within 	1000 	using 	strategies 	and 	algorithms',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.2.G.3',
        'grade' => '2',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Multiply 	one-digit 	whole 	numbers 	by 	multiples 	of 	10 	in 	the 	range',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.2.G.1',
        'grade' => '2',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Understand 	a 	fraction 	1/b 	as 	the 	quantity 	formed 	by 	1 	part 	when 	a',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.2.G.2',
        'grade' => '2',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Understand 	a 	fraction 	as 	a 	number 	on 	the 	number 	line; 	represent',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.2.G.3',
        'grade' => '2',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Explain 	equivalence 	of 	fractions 	in 	special 	cases, 	and 	compare',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.3.MD.1',
        'grade' => '2',
        'subject' => 'Math',
        'category' => 'Measurement and Data',
        'text' => 'T ell 	and 	write 	time 	to 	the 	nearest 	minute 	and 	measure 	time 	intervals',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.3.MD.2',
        'grade' => '2',
        'subject' => 'Math',
        'category' => 'Measurement and Data',
        'text' => 'Measure	and	estimate	liquid	volumes	and	masses	of	objects	using',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.3.MD.3',
        'grade' => '2',
        'subject' => 'Math',
        'category' => 'Measurement and Data',
        'text' => 'Draw	a	scaled	picture	graph	and	a	scaled	bar	graph	to	represent	a',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.3.MD.4',
        'grade' => '2',
        'subject' => 'Math',
        'category' => 'Measurement and Data',
        'text' => 'Generate	 measurement	 data	 by	 measuring	 lengths	 using	 rulers	 marked',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.3.MD.5',
        'grade' => '2',
        'subject' => 'Math',
        'category' => 'Measurement and Data',
        'text' => 'Recognize	area	as	an	attribute	of	plane	figures	and	understand',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.3.MD.6',
        'grade' => '2',
        'subject' => 'Math',
        'category' => 'Measurement and Data',
        'text' => 'Measure	areas	by	counting	unit	squares	(square	cm,	square	m,	square',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.3.MD.8',
        'grade' => '2',
        'subject' => 'Math',
        'category' => 'Measurement and Data',
        'text' => 'Solve	real	world	and	mathematical	problems	involving	perimeters',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.3.G.1',
        'grade' => '2',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Understand	that	shapes	in	different	categories	(e.g.,	rhombuses,',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.3.G.2',
        'grade' => '2',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Partition	shapes	into	parts	with	equal	areas.	Express	the	area	of	each',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.3.G.1',
        'grade' => '4',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Make	sense	of	problems	and	persevere	in',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.3.G.2',
        'grade' => '4',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Reason	abstractly	and	quantitatively.',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.3.G.3',
        'grade' => '4',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Construct	viable	arguments	and	critique',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.3.G.4',
        'grade' => '4',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Model	with	mathematics.',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.3.G.5',
        'grade' => '4',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Use	appropriate	tools	strategically.',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.3.G.6',
        'grade' => '4',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Attend	to	precision.',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.3.G.8',
        'grade' => '4',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Look	for	and	express	regularity	in	repeated',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.3.G.1',
        'grade' => '4',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Interpret	a	multiplication	equation	as	a	comparison,	e.g.,	interpret	35',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.3.G.2',
        'grade' => '4',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Multiply	or	divide	to	solve	word	problems	involving	multiplicative',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.3.G.3',
        'grade' => '4',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Solve	multistep	word	problems	posed	with	whole	numbers	and	having',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.3.G.4',
        'grade' => '4',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Find	all	factor	pairs	for	a	whole	number	in	the	range	1–100.	Recognize',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.3.G.5',
        'grade' => '4',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Generate	a	number	or	shape	pattern	that	follows	a	given	rule.	Identify',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.3.G.1',
        'grade' => '4',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Recognize	that	in	a	multi-digit	whole	number,	a	digit	in	one	place',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.3.G.3',
        'grade' => '4',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Use	place	value	understanding	to	round	multi-digit	whole	numbers	to',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.3.G.4',
        'grade' => '4',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Fluently	add	and	subtract	multi-digit	whole	numbers	using	the',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.3.G.5',
        'grade' => '4',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Multiply	a	whole	number	of	up	to	four	digits	by	a	one-digit	whole',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.3.G.6',
        'grade' => '4',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Find	whole-number	quotients	and	remainders	with	up	to	four-digit',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.3.G.1',
        'grade' => '4',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Explain	why	a	fraction	a/b	is	equivalent	to	a	fraction	(n	×	a)/(n	×	b)',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.3.G.2',
        'grade' => '4',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Compare	two	fractions	with	different	numerators	and	different',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.3.G.3',
        'grade' => '4',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Understand	a	fraction	a/b	with	a	>	1	as	a	sum	of	fractions	1/b.',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.3.G.4',
        'grade' => '4',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Apply	and	extend	previous	understandings	of	multiplication	to',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.3.G.5',
        'grade' => '4',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Express	a	fraction	with	denominator	10	as	an	equivalent	fraction	with',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.3.G.6',
        'grade' => '4',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Use	decimal	notation	for	fractions	with	denominators	10	or	100.	 For',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.3.G.1',
        'grade' => '4',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Know 	relative 	sizes 	of 	measurement 	units 	within 	one 	system 	of 	units',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.3.G.3',
        'grade' => '4',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Apply	the	area	and	perimeter	formulas	for	rectangles	in	real	world	and',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.3.G.4',
        'grade' => '4',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Make	a	line	plot	to	display	a	data	set	of	measurements	in	fractions	of',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.3.G.5',
        'grade' => '4',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Recognize	angles	as	geometric	shapes	that	are	formed	wherever	two',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.3.G.6',
        'grade' => '4',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Measure	angles	in	whole-number	degrees	using	a	protractor.	Sketch',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.4.G.1',
        'grade' => '4',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Draw	points,	lines,	line	segments,	rays,	angles	(right,	acute,	obtuse),',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.4.G.2',
        'grade' => '4',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Classify	two-dimensional	figures	based	on	the	presence	or	absence	of',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.4.G.3',
        'grade' => '4',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Recognize	a	line	of	symmetry	for	a	two-dimensional	figure	as	a	line',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.4.G.1',
        'grade' => '5',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Make	sense	of	problems	and	persevere	in',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.4.G.2',
        'grade' => '5',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Reason	abstractly	and	quantitatively.',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.4.G.3',
        'grade' => '5',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Construct	viable	arguments	and	critique',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.4.G.4',
        'grade' => '5',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Model	with	mathematics.',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.4.G.5',
        'grade' => '5',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Use	appropriate	tools	strategically.',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.4.G.6',
        'grade' => '5',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Attend	to	precision.',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.4.G.8',
        'grade' => '5',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Look	for	and	express	regularity	in	repeated',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.4.G.1',
        'grade' => '5',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Use	parentheses,	brackets,	or	braces	in	numerical	expressions,	and',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.4.G.2',
        'grade' => '5',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Write	simple	expressions	that	record	calculations	with	numbers,	and',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.4.G.3',
        'grade' => '5',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Generate	two	numerical	patterns	using	two	given	rules.	Identify',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.4.G.1',
        'grade' => '5',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Recognize	that	in	a	multi-digit	number,	a	digit	in	one	place	represents',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.4.G.2',
        'grade' => '5',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Explain	patterns	in	the	number	of	zeros	of	the	product	when',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.4.G.3',
        'grade' => '5',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Read,	write,	and	compare	decimals	to	thousandths.',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.4.G.4',
        'grade' => '5',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Use	place	value	understanding	to	round	decimals	to	any	place.',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.4.G.5',
        'grade' => '5',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Fluently	multiply	multi-digit	whole	numbers	using	the	standard',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.4.G.6',
        'grade' => '5',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Find	whole-number	quotients	of	whole	numbers	with	up	to	four-digit',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.4.G.1',
        'grade' => '5',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Add	and	subtract	fractions	with	unlike	denominators	(including	mixed',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.4.G.2',
        'grade' => '5',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Solve	word	problems	involving	addition	and	subtraction	of	fractions',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.4.G.3',
        'grade' => '5',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Interpret	a	fraction	as	division	of	the	numerator	by	the	denominator',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.4.G.5',
        'grade' => '5',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Interpret	multiplication	as	scaling	(resizing),	by:',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.4.G.6',
        'grade' => '5',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Solve	real	world	problems	involving	multiplication	of	fractions	and',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.4.G.1',
        'grade' => '5',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Convert	among	different-sized	standard	measurement	units	within	a',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.4.G.2',
        'grade' => '5',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Make	a	line	plot	to	display	a	data	set	of	measurements	in	fractions	of',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.4.G.3',
        'grade' => '5',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Recognize	volume	as	an	attribute	of	solid	figures	and	understand',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.4.G.4',
        'grade' => '5',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Measure	volumes	by	counting	unit	cubes,	using	cubic	cm,	cubic	in,',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.4.G.5',
        'grade' => '5',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Relate	volume	to	the	operations	of	multiplication	and	addition	and',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.5.G.1',
        'grade' => '5',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Use	a	pair	of	perpendicular	number	lines,	called	axes,	to	define	a',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.5.G.2',
        'grade' => '5',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Represent	real	world	and	mathematical	problems	by	graphing	points',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.5.G.3',
        'grade' => '5',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Understand	that	attributes	belonging	to	a	category	of	two-',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.5.G.1',
        'grade' => '6',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Make	sense	of	problems	and	persevere	in',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.5.G.2',
        'grade' => '6',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Reason	abstractly	and	quantitatively.',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.5.G.3',
        'grade' => '6',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Construct	viable	arguments	and	critique',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.5.G.4',
        'grade' => '6',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Model	with	mathematics.',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.5.G.5',
        'grade' => '6',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Use	appropriate	tools	strategically.',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.5.G.6',
        'grade' => '6',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Attend	to	precision.',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.5.G.8',
        'grade' => '6',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Look	for	and	express	regularity	in	repeated',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.5.G.1',
        'grade' => '6',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Understand	the	concept	of	a	ratio	and	use	ratio	language	to	describe',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.5.G.2',
        'grade' => '6',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Understand	the	concept	of	a	unit	rate	a/b	associated	with	a	ratio	 a:b',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.5.G.3',
        'grade' => '6',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Use	ratio	and	rate	reasoning	to	solve	real-world	and	mathematical',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.5.G.1',
        'grade' => '6',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Interpret	and	compute	quotients	of	fractions,	and	solve	word',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.5.G.2',
        'grade' => '6',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Fluently	divide	multi-digit	numbers	using	the	standard	algorithm.',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.5.G.3',
        'grade' => '6',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Fluently	add,	subtract,	multiply,	and	divide	multi-digit	decimals	using',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.5.G.4',
        'grade' => '6',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Find	the	greatest	common	factor	of	two	whole	numbers	less	than	or',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.5.G.5',
        'grade' => '6',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Understand	that	positive	and	negative	numbers	are	used	together',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.5.G.6',
        'grade' => '6',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Understand	a	rational	number	as	a	point	on	the	number	line.	Extend',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.5.G.8',
        'grade' => '6',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Solve	real-world	and	mathematical	problems	by	graphing	points	in	all',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.5.G.1',
        'grade' => '6',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Write	and	evaluate	numerical	expressions	involving	whole-number',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.5.G.2',
        'grade' => '6',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Write,	read,	and	evaluate	expressions	in	which	letters	stand	for',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.5.G.3',
        'grade' => '6',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Apply	the	properties	of	operations	to	generate	equivalent	expressions.',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.5.G.5',
        'grade' => '6',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Understand	solving	an	equation	or	inequality	as	a	process	of',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.5.G.6',
        'grade' => '6',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Use	variables	to	represent	numbers	and	write	expressions	when',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.5.G.8',
        'grade' => '6',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Write	an	inequality	of	the	form	x	>	c	or	x <	c to	represent	a	constraint',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.5.G.9',
        'grade' => '6',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Use	variables	to	represent	two	quantities	in	a	real-world	problem	that',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.6.G.1',
        'grade' => '6',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Find	the	area	of	right	triangles,	other	triangles,	special	quadrilaterals,',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.6.G.2',
        'grade' => '6',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Find	the	volume	of	a	right	rectangular	prism	with	fractional	edge',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.6.G.3',
        'grade' => '6',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Draw	polygons	in	the	coordinate	plane	given	coordinates	for	the',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.6.G.4',
        'grade' => '6',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Represent	three-dimensional	figures	using	nets	made	up	of	rectangles',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.6.SP.1',
        'grade' => '6',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Recognize	a	statistical	question	as	one	that	anticipates	variability	in',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.6.SP.3',
        'grade' => '6',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Recognize	that	a	measure	of	center	for	a	numerical	data	set',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.6.SP.4',
        'grade' => '6',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Display	numerical	data	in	plots	on	a	number	line,	including	dot	plots,',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.6.SP.5',
        'grade' => '6',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Summarize	numerical	data	sets	in	relation	to	their	context,	such	as	by:',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.6.SP.1',
        'grade' => '7',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Make	sense	of	problems	and	persevere	in',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.6.SP.2',
        'grade' => '7',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Reason	abstractly	and	quantitatively.',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.6.SP.3',
        'grade' => '7',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Construct	viable	arguments	and	critique',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.6.SP.4',
        'grade' => '7',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Model	with	mathematics.',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.6.SP.5',
        'grade' => '7',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Use	appropriate	tools	strategically.',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.6.SP.6',
        'grade' => '7',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Attend	to	precision.',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.6.SP.8',
        'grade' => '7',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Look	for	and	express	regularity	in	repeated',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.6.SP.1',
        'grade' => '7',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Compute	unit	rates	associated	with	ratios	of	fractions,	including	ratios',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.6.SP.2',
        'grade' => '7',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Recognize	and	represent	proportional	relationships	between',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.6.SP.3',
        'grade' => '7',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Use	proportional	relationships	to	solve	multistep	ratio	and	percent',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.6.SP.1',
        'grade' => '7',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Apply	 and	 extend	 previous	 understandings	 of	 addition	 and	 subtraction',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.6.SP.2',
        'grade' => '7',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Apply	and	extend	previous	understandings	of	multiplication	and',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.6.SP.3',
        'grade' => '7',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Solve	real-world	and	mathematical	problems	involving	the	four',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.6.SP.1',
        'grade' => '7',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Apply	properties	of	operations	as	strategies	to	add,	subtract,	factor,',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.6.SP.2',
        'grade' => '7',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Understand	that	rewriting	an	expression	in	different	forms	in	a',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.6.SP.3',
        'grade' => '7',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Solve	multi-step	real-life	and	mathematical	problems	posed	with',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.6.SP.1',
        'grade' => '7',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Solve	problems	involving	scale	drawings	of	geometric	figures,',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.6.SP.2',
        'grade' => '7',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Draw	(freehand,	with	ruler	and	protractor,	and	with	technology)',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.6.SP.3',
        'grade' => '7',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Describe	the	two-dimensional	figures	that	result	from	slicing	three-',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.6.SP.4',
        'grade' => '7',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Know	the	formulas	for	the	area	and	circumference	of	a	circle	and	use',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.6.SP.5',
        'grade' => '7',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Use	facts	about	supplementary,	complementary,	vertical,	and	adjacent',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.6.SP.6',
        'grade' => '7',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Solve	real-world	and	mathematical	problems	involving	area,	volume',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.6.SP.1',
        'grade' => '7',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Understand	that	statistics	can	be	used	to	gain	information	about	a',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.6.SP.2',
        'grade' => '7',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Use	data	from	a	random	sample	to	draw	inferences	about	a	population',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.6.SP.3',
        'grade' => '7',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Informally	assess	the	degree	of	visual	overlap	of	two	numerical',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.6.SP.5',
        'grade' => '7',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Understand	that	the	probability	of	a	chance	event	is	a	number',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.6.SP.6',
        'grade' => '7',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Approximate	the	probability	of	a	chance	event	by	collecting	data	on',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.6.SP.1',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Make	sense	of	problems	and	persevere	in',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.6.SP.2',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Reason	abstractly	and	quantitatively.',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.6.SP.3',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Construct	viable	arguments	and	critique',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.6.SP.4',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Model	with	mathematics.',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.6.SP.5',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Use	appropriate	tools	strategically.',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.6.SP.6',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Attend	to	precision.',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.6.SP.8',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Look	for	and	express	regularity	in	repeated',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.6.SP.1',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Know	that	numbers	that	are	not	rational	are	called	irrational.',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.6.SP.2',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Use	rational	approximations	of	irrational	numbers	to	compare	the	size',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.6.SP.1',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Know	and	apply	the	properties	of	integer	exponents	to	generate',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.6.SP.2',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Use	square	root	and	cube	root	symbols	to	represent	solutions	to',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.6.SP.3',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Use	numbers	expressed	in	the	form	of	a	single	digit	times	an	integer',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.6.SP.4',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Perform	operations	with	numbers	expressed	in	scientific	notation,',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.6.SP.5',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Graph	proportional	relationships,	interpreting	the	unit	rate	as	the',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.6.SP.8',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Analyze	and	solve	pairs	of	simultaneous	linear	equations.',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.6.SP.1',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Understand	that	a	function	is	a	rule	that	assigns	to	each	input	exactly',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.6.SP.2',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Compare	properties	of	two	functions	each	represented	in	a	different',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.6.SP.4',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Construct	a	function	to	model	a	linear	relationship	between	two',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.6.SP.5',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Describe	qualitatively	the	functional	relationship	between	two',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.G.1',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Verify	experimentally	the	properties	of	rotations,	reflections,	and',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.G.2',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Understand	that	a	two-dimensional	figure	is	congruent	to	another	if',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.G.3',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Describe	the	effect	of	dilations,	translations,	rotations,	and	reflections',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.G.4',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Understand	that	a	two-dimensional	figure	is	similar	to	another	if	the',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.G.5',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Use	informal	arguments	to	establish	facts	about	the	angle	sum	and',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.G.6',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Explain	a	proof	of	the	Pythagorean	Theorem	and	its	converse.',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.G.8',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Apply	the	Pythagorean	Theorem	to	find	the	distance	between	two',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.G.9',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Geometry',
        'text' => 'Know	the	formulas	for	the	volumes	of	cones,	cylinders,	and	spheres',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.SP.1',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Construct	and	interpret	scatter	plots	for	bivariate	measurement',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.SP.2',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Know	that	straight	lines	are	widely	used	to	model	relationships',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.SP.3',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Use	the	equation	of	a	linear	model	to	solve	problems	in	the	context',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.SP.1',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Make	sense	of	problems	and	persevere	in',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.SP.2',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Reason	abstractly	and	quantitatively.',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.SP.3',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Construct	viable	arguments	and	critique',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.SP.4',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Model	with	mathematics.',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.SP.5',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Use	appropriate	tools	strategically.',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.SP.6',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Attend	to	precision.',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.SP.8',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Look	for	and	express	regularity	in	repeated',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.SP.1',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Explain	how	the	definition	of	the	meaning	of	rational	exponents',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.SP.2',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Rewrite	expressions	involving	radicals	and	rational	exponents	using',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.SP.3',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Explain	why	the	sum	or	product	of	two	rational	numbers	is	rational;',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.SP.1',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Use	units	as	a	way	to	understand	problems	and	to	guide	the	solution',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.SP.2',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Define	appropriate	quantities	for	the	purpose	of	descriptive	modeling.',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.SP.3',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Choose	a	level	of	accuracy	appropriate	to	limitations	on	measurement',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.SP.1',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Know	there	is	a	complex	number	 i 	such	that	 i 2 	=	–1,	and	every	complex',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.SP.2',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Use	the	relation	 i 2 	=	–1	and	the	commutative,	associative,	and',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.SP.3',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => '(+)	Find	the	conjugate	of	a	complex	number;	use	conjugates	to	find',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.SP.4',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => '(+)	Represent	complex	numbers	on	the	complex	plane	in	rectangular',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.SP.5',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => '(+)	Represent	addition,	subtraction,	multiplication,	and	conjugation	of',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.SP.6',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => '(+)	Calculate	the	distance	between	numbers	in	the	complex	plane	as',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.SP.8',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => '(+)	Extend	polynomial	identities	to	the	complex	numbers.	 For example,',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.SP.9',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => '(+)	Know	the	Fundamental	Theorem	of	 Algebra;	show	that	 it	is	true	for',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.SP.1',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => '(+)	Recognize 	vector	quantities	as	having	both	magnitude	and',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.SP.2',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => '(+)	Find	the	components	of	a	vector	by	subtracting	the	coordinates	of',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.SP.3',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => '(+)	Solve	problems	involving	velocity	and	other	quantities	that	can	be',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.SP.4',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => '(+)	Add	and	subtract	vectors.',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.SP.5',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => '(+)	Multiply	a	vector	by	a	scalar.',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.SP.6',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => '(+)	Use	matrices	to	represent	and	manipulate	data,	e.g.,	to	represent',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.SP.8',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => '(+)	Add,	subtract,	and	multiply	matrices	of	appropriate	dimensions.',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.SP.9',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => '(+)	Understand	that,	unlike	multiplication	of	numbers,	matrix',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.SP.10',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => '(+)	 Understand	 that	 the	 zero	 and	 identity	 matrices	 play	 a	 role	 in	 matrix',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.SP.11',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => '(+)	Multiply	a	vector	(regarded	as	a	matrix	with	one	column)	by	a',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.SP.12',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => '(+)	Work	with	2	×	2	matrices	as	transformations	of	the	plane,	and',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.SP.1',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Make	sense	of	problems	and	persevere	in',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.SP.2',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Reason	abstractly	and	quantitatively.',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.SP.3',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Construct	viable	arguments	and	critique',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.SP.4',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Model	with	mathematics.',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.SP.5',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Use	appropriate	tools	strategically.',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.SP.6',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Attend	to	precision.',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.SP.8',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Look	for	and	express	regularity	in	repeated',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.SP.1',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Interpret	expressions	that	represent	a	quantity	in	terms	of	its	context. ★',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.SP.2',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Use	the	structure	of	an	expression	to	identify	ways	to	rewrite	it.	 For',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.SP.3',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Choose	and	produce	an	equivalent	form	of	an	expression	to	reveal	and',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.SP.4',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Derive	the	formula	for	the	sum	of	a	finite	geometric	series	(when	the',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.SP.1',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Understand	that	polynomials	form	a	system	analogous	to	the	integers,',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.SP.2',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Know	and	apply	the	Remainder	Theorem:	For	a	polynomial	 p ( x )	and	a',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.SP.3',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Identify	zeros	of	polynomials	when	suitable	factorizations	are',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.SP.4',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Prove	polynomial	identities	and	use	them	to	describe	numerical',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.SP.5',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => '(+)	Know	and	apply	 the	Binomial	Theorem	for	the	expansion	of	( x',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.SP.6',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Rewrite	simple	rational	expressions	in	different	forms;	write	 a ( x ) / b ( x )',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.SP.1',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Create	equations	and	inequalities	in	one	variable	and	use	them	to',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.SP.2',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Create	equations	in	two	or	more	variables	to	represent	relationships',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.SP.3',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Represent	constraints	by	equations	or	inequalities,	and	by	systems	of',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.SP.1',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Explain	each	step	in	solving	a	simple	equation	as	following	from	the',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.SP.2',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Solve	simple	rational	and	radical	equations	in	one	variable,	and	give',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.SP.3',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Solve	linear	equations	and	inequalities	in	one	variable,	including',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.SP.4',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Solve	quadratic	equations	in	one	variable.',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.SP.5',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Prove	that,	given	a	system	of	two	equations	in	two	variables,	replacing',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.SP.6',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Solve	systems	of	linear	equations	exactly	and	approximately	(e.g.,	with',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.SP.8',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => '(+)	Represent	a	system	of	linear	equations	as	a	single	matrix	equation',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.SP.9',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => '(+)	Find	the	inverse	of	a	matrix	if	it	exists	and	use	it	to	solve	systems',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.SP.10',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Understand	that	the	graph	of	an	equation	in	two	variables	is	the	set	of',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.SP.11',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Explain	why	the	x-coordinates	of	the	points	where	the	graphs	of',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.SP.12',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Graph	the	solutions	to	a	linear	inequality	in	two	variables	as	a	half-',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.SP.1',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Make	sense	of	problems	and	persevere	in',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.SP.2',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Reason	abstractly	and	quantitatively.',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.SP.3',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Construct	viable	arguments	and	critique',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.SP.4',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Model	with	mathematics.',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.SP.5',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Use	appropriate	tools	strategically.',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.SP.6',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Attend	to	precision.',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.SP.8',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Look	for	and	express	regularity	in	repeated',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.SP.1',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Understand	that	a	function	from	one	set	(called	the	domain)	to',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.SP.2',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Use	function	notation,	evaluate	functions	for	inputs	in	their	domains,',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.SP.3',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Recognize	that	sequences	are	functions,	sometimes	defined',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.SP.4',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'For	a	function	that	models	a	relationship	between	two	quantities,',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.SP.5',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Relate	the	domain	of	a	function	to	its	graph	and,	where	applicable,	to',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.SP.6',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Calculate	and	interpret	the	average	rate	of	change	of	a	function',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.SP.8',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Write	a	function	defined	by	an	expression	in	different	but	equivalent',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.SP.9',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Compare	properties	of	two	functions	each	represented	in	a	different',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.SP.1',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Write	a	function	that	describes	a	relationship	between	two	quantities. ★',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.SP.3',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Identify	the	effect	on	the	graph	of	replacing	 f ( x )	by	 f ( x )	+	 k ,	k 	f ( x ),',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.SP.5',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => '(+)	Understand	the	inverse	relationship	between	exponents	and',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.SP.1',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Distinguish	between	situations	that	can	be	modeled	with	linear',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.SP.2',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Construct	linear	and	exponential	functions,	including	arithmetic	and',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.SP.3',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Observe	using	graphs	and	tables	that	a	quantity	increasing',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.SP.4',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'For	exponential	models,	express	as	a	logarithm	the	solution	to',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.SP.5',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Interpret	the	parameters	in	a	linear	or	exponential	function	in	terms	of',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.SP.1',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Understand	radian	measure	of	an	angle	as	the	length	of	the	arc	on	the',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.SP.2',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Explain	how	the	unit	circle	in	the	coordinate	plane	enables	the',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.SP.3',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => '(+)	Use	special	triangles	to	determine	geometrically	the	values	of	sine,',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.SP.4',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => '(+)	Use	the	unit	circle	to	explain	symmetry	(odd	and	even)	and',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.SP.5',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Choose	trigonometric	functions	to	model	periodic	phenomena	with',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.SP.6',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => '(+)	Understand	that	restricting	a	trigonometric	function	to	a	domain',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.SP.8',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Prove	the	Pythagorean	identity	sin 2 (θ)	+	cos 2 (θ)	=	1	and	use	it	to	find',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.SP.9',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => '(+)	Prove	the	addition	and	subtraction	formulas	for	sine,	cosine,	and',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.SP.1',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Make	sense	of	problems	and	persevere	in',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.SP.2',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Reason	abstractly	and	quantitatively.',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.SP.3',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Construct	viable	arguments	and	critique',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.SP.4',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Model	with	mathematics.',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.SP.5',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Use	appropriate	tools	strategically.',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.SP.6',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Attend	to	precision.',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.SP.8',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Look	for	and	express	regularity	in	repeated',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.SP.1',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Know	precise	definitions	of	angle,	circle,	perpendicular	line,	parallel',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.SP.2',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Represent	transformations	in	the	plane	using,	e.g.,	transparencies',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.SP.3',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Given	a	rectangle,	parallelogram,	trapezoid,	or	regular	polygon,',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.SP.4',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Develop	definitions	of	rotations,	reflections,	and	translations	in	terms',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.SP.5',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Given	a	geometric	figure	and	a	rotation,	reflection,	or	translation,',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.SP.6',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Use	geometric	descriptions	of	rigid	motions	to	transform	figures	and',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.SP.8',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Explain	how	the	criteria	for	triangle	congruence	(ASA,	SAS,	and	SSS)',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.SP.9',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Prove	theorems	about	lines	and	angles.  Theorems include: vertical',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.SP.12',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Make	formal	geometric	constructions	with	a	variety	of	tools	and',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.SP.13',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Construct	an	equilateral	triangle,	a	square,	and	a	regular	hexagon',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.SP.1',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Verify	experimentally	the	properties	of	dilations	given	by	a	center	and',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.SP.2',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Given	two	figures,	use	the	definition	of	similarity	in	terms	of	similarity',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.SP.3',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Use	the	properties	of	similarity	transformations	to	establish	the	AA',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.SP.4',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Prove	theorems	about	triangles.	 Theorems include: a line parallel to one',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.SP.6',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Understand	that	by	similarity,	side	ratios	in	right	triangles	are',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.SP.8',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Use	trigonometric	ratios	and	the	Pythagorean	Theorem	to	solve	right',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.SP.9',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => '(+)	Derive	the	formula	 A 	=	1/2	 ab 	sin( C )	for	the	area	of	a	triangle	by',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.SP.10',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => '(+)	Prove	the	Laws	of	Sines	and	Cosines	and	use	them	to	solve',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.SP.11',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => '(+)	Understand	and	apply	the	Law	of	Sines	and	the	Law	of	Cosines',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.SP.1',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Prove	that	all	circles	are	similar.',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.SP.2',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Identify	and	describe	relationships	among	inscribed	angles,	radii,',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.SP.4',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => '(+)	Construct	a	tangent	line	from	a	point	outside	a	given	circle	to	the',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.SP.5',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Derive	using	similarity	the	fact	that	the	length	of	the	arc	intercepted',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.SP.1',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Derive	the	equation	of	a	circle	of	given	center	and	radius	using	the',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.SP.2',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Derive	the	equation	of	a	parabola	given	a	focus	and	directrix.',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.SP.3',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => '(+)	Derive	the	equations	of	ellipses	and	hyperbolas	given	the	foci,',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.SP.4',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Use	coordinates	to	prove	simple	geometric	theorems	algebraically.	 For',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.SP.6',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Find	the	point	on	a	directed	line	segment	between	two	given	points',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.SP.1',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Give	an	informal	argument	for	the	formulas	for	the	circumference	of',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.SP.2',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => '(+)	Give	an	informal	argument	using	Cavalieri’s	principle	for	the',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.SP.3',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Use	volume	formulas	for	cylinders,	pyramids,	cones,	and	spheres	to',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.SP.4',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Identify	the	shapes	of	two-dimensional	cross-sections	of	three-',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.SP.1',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Use	geometric	shapes,	their	measures,	and	their	properties	to	describe',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.SP.2',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Apply	concepts	of	density	based	on	area	and	volume	in	modeling',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.SP.3',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Apply	geometric	methods	to	solve	design	problems	(e.g.,	designing',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.SP.1',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Make	sense	of	problems	and	persevere	in',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.SP.2',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Reason	abstractly	and	quantitatively.',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.SP.3',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Construct	viable	arguments	and	critique',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.SP.4',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Model	with	mathematics.',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.SP.5',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Use	appropriate	tools	strategically.',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.SP.6',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Attend	to	precision.',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.SP.8',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Look	for	and	express	regularity	in	repeated',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.SP.1',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Represent	data	with	plots	on	the	real	number	line	(dot	plots,',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.SP.2',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Use	statistics	appropriate	to	the	shape	of	the	data	distribution	to',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.SP.3',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Interpret	differences	in	shape,	center,	and	spread	in	the	context	of',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.SP.4',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Use	the	mean	and	standard	deviation	of	a	data	set	to	fit	it	to	a	normal',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.SP.5',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Summarize	categorical	data	for	two	categories	in	two-way	frequency',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.SP.6',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Represent	data	on	two	quantitative	variables	on	a	scatter	plot,	and',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.SP.8',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Compute	(using	technology)	and	interpret	the	correlation	coefficient',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.SP.9',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Distinguish	between	correlation	and	causation.',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.SP.1',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Understand	statistics	as	a	process	for	making	inferences	about',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.SP.2',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Decide	if	a	specified	model	is	consistent	with	results	from	a	given',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.SP.3',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Recognize	the	purposes	of	and	differences	among	sample	surveys,',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.SP.4',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Use	data	from	a	sample	survey	to	estimate	a	population	mean	or',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.SP.5',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Use	data	from	a	randomized	experiment	to	compare	two	treatments;',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.SP.6',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Evaluate	reports	based	on	data.',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.SP.1',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Describe	events	as	subsets	of	a	sample	space	(the	set	of	outcomes)',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.SP.2',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Understand	that	two	events	 A 	and	 B 	are	independent	if	the	probability',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.SP.3',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Understand	the	conditional	probability	of	 A 	given	 B 	as  P ( A 	and',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.SP.4',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Construct	and	interpret	two-way	frequency	tables	of	data	when	two',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.SP.6',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => 'Find	the	conditional	probability	of	 A 	given	 B 	as	the	fraction	of	 B ’s',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.SP.8',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => '(+)	Apply	the	general	Multiplication	Rule	in	a	uniform	probability',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.SP.9',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => '(+)	Use	permutations	and	combinations	to	compute	probabilities	of',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.SP.1',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => '(+)	Define	a	random	variable	for	a	quantity	of	interest	by	assigning',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.SP.2',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => '(+)	Calculate	the	expected	value	of	a	random	variable;	interpret	it	as',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.SP.3',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => '(+)	Develop	a	probability	distribution	for	a	random	variable	defined',
        'explanation' => 'Explanation available upon request.'
    ],
    [
        'code' => 'CCSS.MATH.CONTENT.8.SP.5',
        'grade' => '8',
        'subject' => 'Math',
        'category' => 'Statistics and Probability',
        'text' => '(+)	Weigh	the	possible	outcomes	of	a	decision	by	assigning',
        'explanation' => 'Explanation available upon request.'
    ]
];

include 'src/header.php';
?>

<!-- Header / Hero Section -->
<div class="relative bg-gradient-to-br from-primary to-blue-900 text-white pt-16 pb-20 px-4 mb-8 shadow-xl overflow-hidden rounded-b-[3rem]">
    <!-- Background Elements -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none opacity-20">
        <i class="fas fa-book absolute top-10 right-10 text-9xl rotate-12"></i>
        <i class="fas fa-graduation-cap absolute bottom-10 left-10 text-8xl -rotate-12"></i>
    </div>
    
    <div class="relative z-10 max-w-4xl mx-auto text-center">
        <span class="inline-block py-1 px-3 rounded-full bg-white/10 border border-white/20 text-sm font-bold mb-4 uppercase tracking-wider backdrop-blur-md">
            Academic Roadmap
        </span>
        <h1 class="text-4xl md:text-5xl font-extrabold mb-6">Common Core Standards</h1>
        <p class="text-xl text-blue-100 max-w-2xl mx-auto leading-relaxed">
            A simple, accessible guide to what students are expected to learn at each grade level. We've translated the academic language into plain English.
        </p>
    </div>
</div>

<main class="container mx-auto px-4 mb-20 min-h-screen" id="main-content">

    <!-- Filters & Search Control Bar -->
    <div class="bg-content-bg rounded-2xl shadow-lg border border-gray-200 dark:border-gray-700 p-6 mb-10 sticky top-4 z-30 transition-colors">
        <div class="flex flex-col lg:flex-row gap-6 justify-between items-start lg:items-center">
            
            <!-- Filters -->
            <div class="flex flex-col sm:flex-row gap-4 w-full lg:w-auto">
                <!-- Subject Select -->
                <div class="relative group">
                    <label for="subject-filter" class="sr-only">Filter by Subject</label>
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <i class="fas fa-book-open text-primary group-hover:text-accent transition-colors"></i>
                    </div>
                    <select id="subject-filter" onchange="filterStandards()" 
                        class="pl-10 pr-10 py-3 bg-base-bg border border-gray-300 dark:border-gray-600 text-text-default rounded-xl focus:ring-2 focus:ring-primary focus:border-primary appearance-none w-full sm:w-48 cursor-pointer font-medium shadow-sm transition-all hover:bg-gray-50 dark:hover:bg-gray-800">
                        <option value="all">All Subjects</option>
                        <option value="Math">Math</option>
                        <option value="ELA">ELA (English)</option>
                    </select>
                    <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none text-text-secondary">
                        <i class="fas fa-chevron-down text-xs"></i>
                    </div>
                </div>

                <!-- Grade Select -->
                <div class="relative group">
                    <label for="grade-filter" class="sr-only">Filter by Grade</label>
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <i class="fas fa-layer-group text-primary group-hover:text-accent transition-colors"></i>
                    </div>
                    <select id="grade-filter" onchange="filterStandards()" 
                        class="pl-10 pr-10 py-3 bg-base-bg border border-gray-300 dark:border-gray-600 text-text-default rounded-xl focus:ring-2 focus:ring-primary focus:border-primary appearance-none w-full sm:w-48 cursor-pointer font-medium shadow-sm transition-all hover:bg-gray-50 dark:hover:bg-gray-800">
                        <option value="all">All Grades</option>
                        <option value="K">Kindergarten</option>
                        <option value="1">Grade 1</option>
                        <option value="2">Grade 2</option>
                        <option value="3">Grade 3</option>
                        <option value="4">Grade 4</option>
                        <option value="5">Grade 5</option>
                        <option value="6">Grade 6</option>
                        <option value="7">Grade 7</option>
                        <option value="8">Grade 8</option>
                        <option value="HS">High School</option>
                    </select>
                     <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none text-text-secondary">
                        <i class="fas fa-chevron-down text-xs"></i>
                    </div>
                </div>
            </div>

            <!-- Search -->
            <div class="relative w-full lg:w-96">
                <label for="standard-search" class="sr-only">Search standards</label>
                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                    <i class="fas fa-search text-gray-400"></i>
                </div>
                <input type="text" id="standard-search" onkeyup="filterStandards()" 
                    placeholder="Search by code or keyword..." 
                    class="w-full pl-11 pr-4 py-3 bg-base-bg border border-gray-300 dark:border-gray-600 rounded-xl text-text-default placeholder-gray-400 focus:ring-2 focus:ring-primary focus:border-primary transition-all shadow-sm">
            </div>
        </div>
        
        <!-- Live Count -->
        <div class="mt-4 pt-4 border-t border-gray-200 dark:border-gray-700 flex justify-between items-center text-sm text-text-secondary">
            <span id="showing-count">Showing all standards</span>
            <button onclick="resetFilters()" class="text-primary hover:underline font-bold text-xs uppercase tracking-wide">Reset Filters</button>
        </div>
    </div>

    <!-- Standards Grid -->
    <div id="standards-container" class="space-y-6">
        <?php foreach ($standards as $std): ?>
            <!-- Standard Card -->
            <article class="standard-item bg-content-bg rounded-xl shadow-md border-l-4 border-primary hover:shadow-lg transition-all duration-300 overflow-hidden"
                data-grade="<?php echo $std['grade']; ?>"
                data-subject="<?php echo $std['subject']; ?>"
                data-search="<?php echo strtolower($std['code'] . ' ' . $std['text'] . ' ' . $std['explanation']); ?>">
                
                <div class="p-6">
                    <!-- Header Row -->
                    <div class="flex flex-col md:flex-row md:items-start justify-between gap-4 mb-4">
                        <div>
                            <div class="flex flex-wrap gap-2 mb-2">
                                <span class="px-2 py-1 bg-primary/10 text-primary text-xs font-bold rounded uppercase tracking-wide">
                                    <?php echo $std['subject']; ?>
                                </span>
                                <span class="px-2 py-1 bg-gray-100 dark:bg-gray-700 text-text-secondary text-xs font-bold rounded">
                                    Grade <?php echo $std['grade']; ?>
                                </span>
                                <span class="px-2 py-1 bg-blue-50 dark:bg-blue-900/30 text-blue-600 dark:text-blue-300 text-xs font-mono rounded border border-blue-100 dark:border-blue-800">
                                    <?php echo $std['code']; ?>
                                </span>
                            </div>
                            <h3 class="text-lg font-bold text-text-default">
                                <?php echo $std['category']; ?>
                            </h3>
                        </div>
                        
                        <!-- TTS Button -->
                        <button onclick="readStandard(this)" 
                            class="flex-shrink-0 w-10 h-10 rounded-full bg-base-bg text-text-secondary hover:text-primary hover:bg-primary/10 transition-colors flex items-center justify-center focus:outline-none focus:ring-2 focus:ring-primary"
                            aria-label="Read standard aloud">
                            <i class="fas fa-volume-up"></i>
                        </button>
                    </div>

                    <!-- Official Text -->
                    <div class="mb-4">
                        <p class="text-sm text-text-secondary uppercase tracking-wider font-bold mb-1">Official Standard</p>
                        <p class="text-text-default font-serif italic border-l-2 border-gray-300 dark:border-gray-600 pl-4 py-1">
                            "<?php echo $std['text']; ?>"
                        </p>
                    </div>

                    <!-- Plain English Translation (Highlight) -->
                    <div class="bg-green-50 dark:bg-green-900/20 rounded-lg p-4 border border-green-100 dark:border-green-900/50">
                        <div class="flex items-start gap-3">
                            <i class="fas fa-lightbulb text-green-600 dark:text-green-400 mt-1"></i>
                            <div>
                                <h4 class="text-green-800 dark:text-green-300 font-bold text-sm mb-1">Plain English Explanation</h4>
                                <p class="text-text-default text-base leading-relaxed">
                                    <?php echo $std['explanation']; ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Example Button -->
                    <div class="mt-4 pt-4 border-t border-gray-100 dark:border-gray-800 flex justify-end">
                        <button onclick="openExampleModal('<?php echo $std['code']; ?>', '<?php echo htmlspecialchars(addslashes($std['text'])); ?>', '<?php echo htmlspecialchars(addslashes(getStandardExample($std))); ?>')" class="text-sm font-bold text-primary hover:text-accent transition-colors flex items-center gap-2 px-3 py-2 rounded-lg hover:bg-primary/5">
                            <i class="fas fa-chalkboard-teacher"></i> View Example
                        </button>
                    </div>
                </div>
            </article>
        <?php endforeach; ?>
    </div>

    <!-- No Results State -->
    <div id="no-results" class="hidden text-center py-20">
        <div class="w-20 h-20 bg-gray-100 dark:bg-gray-800 rounded-full flex items-center justify-center mx-auto mb-4 text-3xl text-gray-400">
            <i class="fas fa-search"></i>
        </div>
        <h3 class="text-xl font-bold text-text-default mb-2">No standards found</h3>
        <p class="text-text-secondary">Try adjusting your filters or search terms.</p>
        <button onclick="resetFilters()" class="mt-4 text-primary font-bold hover:underline">Clear Filters</button>
    </div>

    <!-- Example Modal -->
    <div id="example-modal" class="fixed inset-0 z-[100] hidden bg-black/50 backdrop-blur-sm flex items-center justify-center p-4 opacity-0 transition-opacity duration-300" aria-labelledby="modal-standard-code" role="dialog" aria-modal="true">
        <div class="bg-content-bg rounded-2xl shadow-2xl max-w-lg w-full overflow-hidden transform scale-95 transition-transform duration-300" id="example-modal-content">
            <div class="p-6 border-b border-gray-200 dark:border-gray-700 flex justify-between items-center bg-gray-50 dark:bg-gray-800">
                <h3 class="text-xl font-bold text-text-default flex items-center gap-2">
                    <i class="fas fa-chalkboard-teacher text-primary"></i> <span id="modal-standard-code">Standard Example</span>
                </h3>
                <button onclick="closeExampleModal()" class="text-gray-400 hover:text-gray-600 dark:hover:text-gray-200 transition-colors focus:outline-none focus:ring-2 focus:ring-primary rounded-full p-1 w-8 h-8 flex items-center justify-center">
                    <i class="fas fa-times text-xl"></i>
                    <span class="sr-only">Close</span>
                </button>
            </div>
            <div class="p-6">
                <p class="text-sm font-bold text-text-secondary uppercase tracking-wider mb-2">Standard Text</p>
                <p id="modal-standard-text" class="text-text-default italic border-l-2 border-gray-300 dark:border-gray-600 pl-3 mb-6">
                    <!-- Standard text goes here -->
                </p>
                
                <div class="bg-blue-50 dark:bg-blue-900/20 p-4 rounded-xl border border-blue-100 dark:border-blue-900/50">
                    <h4 class="text-blue-800 dark:text-blue-300 font-bold mb-2 flex items-center gap-2">
                        <i class="fas fa-magic"></i> Practical Example
                    </h4>
                    <p id="modal-example-content" class="text-text-default">
                        <!-- Example goes here -->
                    </p>
                </div>
            </div>
            <div class="p-4 bg-gray-50 dark:bg-gray-800 border-t border-gray-200 dark:border-gray-700 flex justify-end">
                <button onclick="closeExampleModal()" class="px-6 py-2 bg-primary text-white font-bold rounded-lg hover:bg-blue-700 transition-colors shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                    Close
                </button>
            </div>
        </div>
    </div>

</main>

<script>
    function filterStandards() {
        const subject = document.getElementById('subject-filter').value;
        const grade = document.getElementById('grade-filter').value;
        const search = document.getElementById('standard-search').value.toLowerCase();
        
        const items = document.querySelectorAll('.standard-item');
        let visibleCount = 0;

        items.forEach(item => {
            const itemSubject = item.dataset.subject;
            const itemGrade = item.dataset.grade;
            const itemSearchData = item.dataset.search;

            const subjectMatch = (subject === 'all' || itemSubject === subject);
            const gradeMatch = (grade === 'all' || itemGrade === grade);
            const searchMatch = (search === '' || itemSearchData.includes(search));

            if (subjectMatch && gradeMatch && searchMatch) {
                item.classList.remove('hidden');
                // Add simple fade in animation
                item.style.opacity = '0';
                setTimeout(() => item.style.opacity = '1', 50);
                visibleCount++;
            } else {
                item.classList.add('hidden');
            }
        });

        // Update UI states
        const noResults = document.getElementById('no-results');
        const container = document.getElementById('standards-container');
        const countLabel = document.getElementById('showing-count');

        if (visibleCount === 0) {
            noResults.classList.remove('hidden');
            container.classList.add('hidden');
            countLabel.textContent = 'No results';
        } else {
            noResults.classList.add('hidden');
            container.classList.remove('hidden');
            countLabel.textContent = `Showing ${visibleCount} standard${visibleCount !== 1 ? 's' : ''}`;
        }
    }

    function resetFilters() {
        document.getElementById('subject-filter').value = 'all';
        document.getElementById('grade-filter').value = 'all';
        document.getElementById('standard-search').value = '';
        filterStandards();
    }

    // Simple Text-to-Speech for Accessibility
    function readStandard(btn) {
        // Stop any current speech
        window.speechSynthesis.cancel();

        // Visual feedback reset
        document.querySelectorAll('.fa-stop').forEach(icon => {
            icon.classList.remove('fa-stop');
            icon.classList.add('fa-volume-up');
            icon.closest('button').classList.remove('text-primary', 'animate-pulse');
        });

        const card = btn.closest('.standard-item');
        const code = card.querySelector('.font-mono').innerText;
        const text = card.querySelector('.font-serif').innerText;
        const expl = card.querySelector('.bg-green-50 p').innerText;

        const utterance = new SpeechSynthesisUtterance(`Standard ${code}. ${text}. In other words: ${expl}`);
        
        // Icon change
        const icon = btn.querySelector('i');
        icon.classList.remove('fa-volume-up');
        icon.classList.add('fa-stop');
        btn.classList.add('text-primary', 'animate-pulse');

        utterance.onend = () => {
            icon.classList.remove('fa-stop');
            icon.classList.add('fa-volume-up');
            btn.classList.remove('text-primary', 'animate-pulse');
        };

        window.speechSynthesis.speak(utterance);
    }

    // Modal Logic
    const exampleModal = document.getElementById('example-modal');
    const modalContent = document.getElementById('example-modal-content');
    
    function openExampleModal(code, text, specificExample) {
        document.getElementById('modal-standard-code').textContent = code;
        document.getElementById('modal-standard-text').textContent = `"${text}"`;
        document.getElementById('modal-example-content').textContent = specificExample || "Example: A teacher might ask a student to apply this standard by solving a practical, real-world problem or explaining their reasoning aloud.";
        
        exampleModal.classList.remove('hidden');
        // trigger reflow for transition
        void exampleModal.offsetWidth;
        exampleModal.classList.remove('opacity-0');
        modalContent.classList.remove('scale-95');
    }

    function closeExampleModal() {
        exampleModal.classList.add('opacity-0');
        modalContent.classList.add('scale-95');
        setTimeout(() => {
            exampleModal.classList.add('hidden');
        }, 300);
    }
    
    // Close modal if clicking outside
    exampleModal.addEventListener('click', function(e) {
        if (e.target === exampleModal) {
            closeExampleModal();
        }
    });

</script>

<?php include 'src/footer.php'; ?>