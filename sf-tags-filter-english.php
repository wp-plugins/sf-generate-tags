<?php

function filterEnglish($input_array) {
$output_array = array();
	
	$digits = array('one', 'two', 'three', 'four', 'five', 'six', 'seven', 'eight', 'nine', 'ten',
		'first', 'second', 'third', 'fourth', 'fifth', 'sixth', 'seventh', 'eighth', 'nineth', 'tenth',
		'hundred', 'hundreds', 'thousand', 'thousands');
	
	$addressing_words = array('another', 'both', 'each', 'other', 'their', 'theirs');

	$easy_words = array( 'after', 'ago', 'almost', 'also', 'although', 'always', 'and', 'any', 'anyone', 'are', 'around', 'all', 
		'become', 'before', 'but', 'com', 'down', 'due', 'either', 'extra', 'every', 'false', 'for', 'from', 
		'here', 'him', 'how', 'however',
		'inn', 'into', 'its', 'jpg', 'just', 'less', 'mean', 'more', 'most', 'myself', 'never', 'new', 'not', 'now',
		'often', 'once', 'only', 'others', 'our', 'ours', 'out', 'over', 'per', 'png', 
		'same', 'since', 'she', 'someone', 'something', 'sure', 'such',
		'than', 'that', 'the', 'then', 'there', 'these', 'them', 'they', 'those', 'this', 'through', 'thus', 'too', 'true', 
		'under', 'via',
		'what', 'when', 'whenever', 'where', 'whether', 'without', 'which', 'while', 'whithin', 'who', 'whole', 'whose', 'why', 'with', 
		'yes', 'yet', 'you', 'your', 'yours');
	
	$substantives = array('about', 'above', 'after', 'again', 'ahead', 'already', 'amount', 
		'another', 'anything', 'approach', 'around', 'away', 
		'carefull', 'certain', 'clear', 'correct',
		'dead', 'define', 'different', 'directly',
		'easy', 'easiest', 'easily', 'even', 'everything', 'everywhere', 'final', 'good', 
		'kinds', 'least', 'last', 'look',
		'many', 'maybe', 'much', 'needs', 'next', 'new', 'overview', 'reason',
		'several', 'sites', 'site', 'some', 'something', 'step',
		'thing', 'things', 'systems', 'system', 'still',
		'very');
		
	$adjectives = array('actual', 'authentic', 'bad', 'better', 'closed', 'current', 'easier', 'few', 'full', 'good', 
		'great', 'huge', 'later', 'make', 'new', 'old', 'open', 
		'poor', 'possible', 'proper', 'quite', 'real',
		'seen', 'similar', 'small', 'taken', 'tiny', 'thrown', 'took', 'using');
	
	$verbs = array('able', 'achieve', 'add', 'afford', 'arise', 
		'been', 'bought',
		'came', 'can', 'care', 'choose', 'chosen', 'click', 'come', 'considers', 'consists', 'contains', 'copy', 'could',
		'decide', 'did', 'does', 'doing', 'done', 'edit',
		'fill', 'find', 'found', 'gave', 'get', 'gets', 'give', 'guess',
		'had', 'happen', 'has', 'have', 'helps', 'jump', 'keep', 'kept', 'let', 'like', 'look', 
		'make', 'mean', 'means', 'might', 'must', 'own', 'paste', 'pick', 'put', 'read', 'receive', 'remember', 'run',
		'say', 'see', 'send', 'set', 'should', 'sit', 'spend', 'start', 'stop', 'take', 'tell', 'took', 'thought', 'try', 
		'use', 'var', 'want', 'was', 'were', 'will', 'would');
		
	foreach ( $input_array as $word ) 
	{
		$toOutput = true;
		
		if(in_array( $word, $addressing_words )
			|| in_array( $word, $easy_words )
			|| in_array( $word, $digits )
			|| in_array( $word, $substantives )
			|| in_array( $word, $adjectives )
			|| in_array( $word, $verbs )
			|| wordEndsWith($word, "al")
			|| wordEndsWith($word, "able")
			|| wordEndsWith($word, "ly")
			|| wordEndsWith($word, "ed")
			|| wordEndsWith($word, "'s")
			|| wordEndsWith($word, "es")
			|| wordEndsWith($word, "ing")
			|| wordEndsWith($word, "est")
		)
		{ 	
			$toOutput = false;
		} 

		if($toOutput == TRUE){
			array_push($output_array, $word);
		}
	}
	
	return $output_array;
}
?>