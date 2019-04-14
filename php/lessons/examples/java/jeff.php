<?php include("../../../masters/header.php"); ?>

<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner"
 style="background-image:url(<?php echo $siteurl ?>/images/img_bg_2.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1>Java Example</h1>
							<h2><span class="redcolor">Jeff</span>.</h2>
						</div>
					</div>
				</div>
			</div>
		</div>
</header>

<div class="container">
	<div class="row">
		<div class="col-xs-12" style="margin: 50px 0;">
		<a href="<?php echo $siteurl ?>/php/lessons/java.php" class="btn btn-select-plan btn-sm btn-learn previous-button"><i class="icon-arrow-left"></i> Back to Examples</a>
			<div class="mp-code-example">
				package edu.iuk.JeffV2;<br/>
				<br/>
				import java.util.ArrayList;<br/>
				import java.util.Scanner;<br/>
				<br/>
				public class JeffV2 {<br/>
				<br/>
				&nbsp;&nbsp;public static void main(String[] args) {<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;// Jeff<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;int spaceIndex;<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;String userName;<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;String nextInput;<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;ArrayList<String> wordInput = new ArrayList<String>();<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;String[] helloVariables;<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;String[] greetingQuestVar;<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;String[] badVariables;<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;String[] goodVariables;<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;String[] goodbyeVariables;<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;String[] disneyVariables;<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;String[] laughingVariables;<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;// Greeting<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;helloVariables = new String[7];<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;helloVariables[0] = "hello";<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;helloVariables[1] = "hey";<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;helloVariables[2] = "hi";<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;helloVariables[3] = "howdy";<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;helloVariables[4] = "yo";<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;helloVariables[5] = "sup";<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;helloVariables[6] = "hola";<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;// Emotion<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;greetingQuestVar = new String[7];<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;greetingQuestVar[0] = "how are you";<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;greetingQuestVar[1] = "how you doin";<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;greetingQuestVar[2] = "what's up";<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;greetingQuestVar[3] = "what is up";<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;greetingQuestVar[4] = "what's going on";<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;greetingQuestVar[5] = "how's it hanging";<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;greetingQuestVar[6] = "sup";<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;badVariables = new String[8];<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;badVariables[0] = "not too good";<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;badVariables[1] = "awful";<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;badVariables[2] = "I want to die";<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;badVariables[3] = "horrible";<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;badVariables[4] = "i'm upset";<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;badVariables[5] = "crappy";<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;badVariables[6] = "shoot";<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;badVariables[7] = "not okay";<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;goodVariables = new String[11];<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;goodVariables[0] = "not too bad";<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;goodVariables[1] = "great";<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;goodVariables[2] = "not too shabby";<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;goodVariables[3] = "awesome";<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;goodVariables[4] = "i'm happy";<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;goodVariables[5] = "grand";<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;goodVariables[6] = "excellent";<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;goodVariables[7] = "i'm alright";<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;goodVariables[8] = "fine";<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;goodVariables[9] = "good";<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;goodVariables[10] = "i'm okay";<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;goodbyeVariables = new String[8];<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;goodbyeVariables[0] = "bye";<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;goodbyeVariables[1] = "see you";<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;goodbyeVariables[2] = "smell you later";<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;goodbyeVariables[3] = "adios";<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;goodbyeVariables[4] = "catch you on the flip side";<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;goodbyeVariables[5] = "peace out";<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;goodbyeVariables[6] = "talk to you later";<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;goodbyeVariables[7] = "goodbye";<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;disneyVariables = new String[17];<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;disneyVariables[0] = "disney";<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;disneyVariables[1] = "pinnochio";<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;disneyVariables[2] = "ariel";<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;disneyVariables[3] = "little mermaid";<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;disneyVariables[4] = "aladdin";<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;disneyVariables[5] = "nemo";<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;disneyVariables[6] = "monsters inc";<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;disneyVariables[7] = "suite life";<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;disneyVariables[8] = "mickey";<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;disneyVariables[9] = "minnie";<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;disneyVariables[10] = "donald duck";<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;disneyVariables[11] = "goofy";<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;disneyVariables[12] = "walt";<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;disneyVariables[13] = "walt disney";<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;disneyVariables[14] = "mickey mouse";<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;disneyVariables[15] = "minnie mouse";<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;disneyVariables[16] = "mickey mouse clubhouse";<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;laughingVariables = new String[6];<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;laughingVariables[0] = "lol";<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;laughingVariables[1] = "haha";<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;laughingVariables[2] = "hehe";<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;laughingVariables[3] = "lmao";<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;laughingVariables[4] = "lawl";<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;laughingVariables[5] = "lul";<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;//start Jeff Talk
				&nbsp;&nbsp;&nbsp;&nbsp;Scanner name = new Scanner(System.in);<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;System.out.println("Hello, I am Jeff. What is your name?");<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;//user's name entered
				&nbsp;&nbsp;&nbsp;&nbsp;userName = name.nextLine();<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;System.out.println("Nice to meet you, " + userName);<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;for (int ind = 0; ind < 9999999; ind = ind) {<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for (int i = 0; i < 999999999; i = i) {<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;i = 0;<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Scanner next = new Scanner(System.in);<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;nextInput = next.nextLine();<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;nextInput = nextInput.toLowerCase();<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// clear array<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;wordInput.clear();<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// put each word into the array<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for (int i1 = 0; nextInput.length() > 0; i1++) {<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// remove punctuation<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;nextInput.replace(";", ".");<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;nextInput.replace("!", ".");<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;nextInput.replace("?", ".");<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// if there aren't any more spaces<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (nextInput.indexOf(".") <= 0) {<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// put word into next array location<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;wordInput.add(nextInput.substring(0));<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// clear nextInput<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;nextInput = "";<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else {<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// index of space<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;spaceIndex = nextInput.indexOf(".");<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// put the word before the space into next array location<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;wordInput.add(nextInput.substring(0, spaceIndex - 1));<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// remove the word and space from the sentence<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;nextInput.replace(wordInput.get(wordInput.size() - 1) + ".", "");<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// take the word<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for (int word = 0; word < wordInput.size(); word++) {<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// and try it on hello variables<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for (int i1 = 0; i1 < helloVariables.length; i1++) {<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// if the word matches the hello variables<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (wordInput.get(word).equals(helloVariables[i1])) {<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// say hello<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;System.out.println("Hello, " + userName + "!");<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// add to the counter<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;i++;<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// break the hello Variable loop<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for (int i1 = 0; i1 < greetingQuestVar.length; i1++) {<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (wordInput.get(word).equals(greetingQuestVar[i1])) {<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;System.out.println("I am doing well! How are you?");<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;i++;<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (i > 0) {<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for (int i1 = 0; i1 < badVariables.length; i1++) {<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (wordInput.get(word).equals(badVariables[i1])) {<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;System.out.println("I am sorry to hear that.");<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;i++;<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (i > 0) {<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for (int i1 = 0; i1 < goodVariables.length; i1++) {<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (wordInput.get(word).equals(goodVariables[i1])) {<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;System.out.println("I am glad to hear that!");<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;i++;<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (i > 0) {<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for (int i1 = 0; i1 < disneyVariables.length; i1++) {<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (wordInput.get(word).equals(disneyVariables[i1])) {<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;System.out.println("Oh! I love Disney!");<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;i++;<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for (int i1 = 0; i1 < laughingVariables.length; i1++) {<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (wordInput.get(word).equals(laughingVariables[i1])) {<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;System.out.println("I'm glad that I can make you laugh!");<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;i++;<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (i > 0) {
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for (int i1 = 0; i1 < goodbyeVariables.length; i1++) {<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (wordInput.get(word).equals(goodbyeVariables[i1])) {<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;System.out.println("See you Later!");<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;System.exit(0);<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (i == 0) {<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;System.out.println("Sorry, I didn't quite catch that. Can you rephrase it?");<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;}<br/>
				<br/>
				&nbsp;&nbsp;}<br/>
				<br/>
				}
			</div>
		<a href="<?php echo $siteurl ?>/php/lessons/java.php" class="btn btn-select-plan btn-sm btn-learn previous-button"><i class="icon-arrow-left"></i> Back to Examples</a>
		</div>
	</div>
</div>
<?php include("../../../masters/footer.php"); ?>