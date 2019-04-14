<?php include("../../../masters/header.php"); ?>

<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner"
 style="background-image:url(<?php echo $siteurl ?>/images/img_bg_2.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1>Android Development Example: Flag Guessing Game</h1>
							<h2><span class="redcolor">Main Activity</span>.</h2>
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
				package com.example.flagguessinggamev1;<br/>
				<br/>
				import android.app.Activity;<br/>
				import android.os.Bundle;<br/>
				import android.view.View;<br/>
				<br/>
				//New Imports:<br/>
				import java.io.IOException;<br/>
				import java.io.InputStream;<br/>
				import java.security.SecureRandom;<br/>
				import java.util.ArrayList;<br/>
				import java.util.Collections;<br/>
				import java.util.HashSet;<br/>
				import java.util.List;<br/>
				import java.util.Set;<br/>
				<br/>
				import android.app.AlertDialog;<br/>
				import android.app.Dialog;<br/>
				import android.app.DialogFragment;<br/>
				import android.content.DialogInterface;<br/>
				import android.content.res.AssetManager;<br/>
				import android.graphics.drawable.Drawable;<br/>
				import android.os.Handler;<br/>
				import android.util.Log;<br/>
				import android.view.View.OnClickListener;<br/>
				import android.view.animation.Animation;<br/>
				import android.view.animation.AnimationUtils;<br/>
				import android.widget.Button;<br/>
				import android.widget.ImageView;<br/>
				import android.widget.LinearLayout;<br/>
				import android.widget.TextView;<br/>
				<br/>
				public class MainActivity extends Activity {<br/>
				<br/>
	   			&nbsp;&nbsp;// String used when logging error messages using class Log to distinguish<br/>
	   			&nbsp;&nbsp;// this activity's error messages from others that are being written to the log<br/>
	   			&nbsp;&nbsp;private static final String TAG = "FlagQuiz Activity";<br/>
	   			<br/>
	   			&nbsp;&nbsp;//Number of flags in the game<br/>
	   			&nbsp;&nbsp;private static final int FLAGS_IN_GAME = 10;<br/>
	   			<br/>
	   			&nbsp;&nbsp;private List<String> fileNameList; // flag file names<br/>
	   			&nbsp;&nbsp;private List<String> gameCountriesList; // countries in current game<br/>
	   			&nbsp;&nbsp;private Set<String> regionsSet; // world regions in current game<br/>
	   			&nbsp;&nbsp;//set vs list: a set is unordered and contains unique elements<br/>
	   			&nbsp;&nbsp;//HashSet uses a hash table for storage and thus the user has no control<br/>
	   			&nbsp;&nbsp;//over where in the set the element will be stored. You can't use and<br/>
	   			&nbsp;&nbsp;//index to access the element. So use ArrayLists here if you want to<br/>
	   			&nbsp;&nbsp;//access elements by their index.<br/>
	   			&nbsp;&nbsp;private String correctAnswer; // correct country for the current flag<br/>
	   			&nbsp;&nbsp;private int totalGuesses; // number of guesses made<br/>
	   			&nbsp;&nbsp;private int correctAnswers; // number of correct guesses<br/>
	   			&nbsp;&nbsp;private SecureRandom random; // used to randomize the game<br/>
	   			&nbsp;&nbsp;//SecureRandom produce cryptographically secure random numbers<br/>
	   			&nbsp;&nbsp;private Handler handler; // used to delay loading next flag<br/>
	   			&nbsp;&nbsp;private Animation shakeAnimation; // animation for incorrect guess<br/>
	   			&nbsp;&nbsp;private TextView questionNumberTextView; // shows current question #<br/>
	   			&nbsp;&nbsp;private ImageView flagImageView; // displays a flag<br/>
	   			&nbsp;&nbsp;private LinearLayout guessLinearLayout; // answer Buttons<br/>
	   			&nbsp;&nbsp;private TextView answerTextView; // displays Correct! or Incorrect!<br/>
	   			<br/>
	 			&nbsp;&nbsp;//**********************************************************************<br/>
				<br/>
				&nbsp;&nbsp;@Override<br/>
				&nbsp;&nbsp;protected void onCreate(Bundle savedInstanceState) {<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;super.onCreate(savedInstanceState);<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;setContentView(R.layout.activity_main);<br/>
				<br/>
	      			&nbsp;&nbsp;&nbsp;&nbsp;fileNameList = new ArrayList<String>();<br/>
	      			&nbsp;&nbsp;&nbsp;&nbsp;gameCountriesList = new ArrayList<String>();<br/>
	      			&nbsp;&nbsp;&nbsp;&nbsp;regionsSet = new HashSet<String>();<br/>
	      			<br/>
	      			&nbsp;&nbsp;&nbsp;&nbsp;//HashSet creates a collection that uses a hash table for storage.<br/>
	      			&nbsp;&nbsp;&nbsp;&nbsp;regionsSet.add("Asia");<br/>
	      			&nbsp;&nbsp;&nbsp;&nbsp;regionsSet.add("Africa");<br/>
	      			&nbsp;&nbsp;&nbsp;&nbsp;regionsSet.add("North_America");<br/>
	      			&nbsp;&nbsp;&nbsp;&nbsp;regionsSet.add("South_America");<br/>
	      			&nbsp;&nbsp;&nbsp;&nbsp;regionsSet.add("Europe");<br/>
	      			&nbsp;&nbsp;&nbsp;&nbsp;regionsSet.add("Oceania");<br/>
	      			<br/>
	      			&nbsp;&nbsp;&nbsp;&nbsp;random = new SecureRandom();<br/>
	      			&nbsp;&nbsp;&nbsp;&nbsp;handler = new Handler(); // handles the delay of next flag by 2 secs<br/>
				<br/>
	      			&nbsp;&nbsp;&nbsp;&nbsp;// load the shake animation that's used for incorrect answers<br/>
	      			&nbsp;&nbsp;&nbsp;&nbsp;shakeAnimation = AnimationUtils.loadAnimation(this, R.anim.incorrect_shake);<br/>
	      			&nbsp;&nbsp;&nbsp;&nbsp;shakeAnimation.setRepeatCount(3); // animation repeats 3 times<br/>
				<br/>
	      			&nbsp;&nbsp;&nbsp;&nbsp;// get references to GUI components<br/>
	      			&nbsp;&nbsp;&nbsp;&nbsp;questionNumberTextView = (TextView) findViewById(R.id.questionNumberTextView);<br/>
	      			&nbsp;&nbsp;&nbsp;&nbsp;flagImageView = (ImageView) findViewById(R.id.flagImageView);<br/>
	      			&nbsp;&nbsp;&nbsp;&nbsp;guessLinearLayout = (LinearLayout) findViewById(R.id.buttonsLinearLayout);<br/>
	      			&nbsp;&nbsp;&nbsp;&nbsp;answerTextView = (TextView) findViewById(R.id.answerTextView);<br/>
				<br/>
	      			&nbsp;&nbsp;&nbsp;&nbsp;// set questionNumberTextView's text<br/>
	      			&nbsp;&nbsp;&nbsp;&nbsp;//This will format and put the 'question' string resource which is <br/>
	      			&nbsp;&nbsp;&nbsp;&nbsp;//Question %1$d of %2$d in the textview.<br/>
	      			&nbsp;&nbsp;&nbsp;&nbsp;questionNumberTextView.setText(getResources().getString(R.string.question, 1, FLAGS_IN_GAME));<br/>
	      			<br/>
	      			&nbsp;&nbsp;&nbsp;&nbsp;// Configure listeners for the 3 guess buttons in the linearlayout:<br/>
	      			&nbsp;&nbsp;&nbsp;&nbsp;for (int btn = 0; btn < 3; btn++)  {<br/>
	      			<br/>
	          		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Button button = (Button) guessLinearLayout.getChildAt(btn);<br/>
	         		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;button.setOnClickListener(guessButtonListener);<br/>
	         		<br/>
	      			&nbsp;&nbsp;&nbsp;&nbsp;}<br/>
	      			<br/>
	      			&nbsp;&nbsp;&nbsp;&nbsp;//Start a new game:<br/>
	      			&nbsp;&nbsp;&nbsp;&nbsp;resetGame();<br/>
	      			<br/>
				&nbsp;&nbsp;}<br/>
				<br/>
    				&nbsp;&nbsp;//**********************************************************************<br/>
	   			&nbsp;&nbsp;// set-up and start the next game - populate the arrays<br/>
	   			&nbsp;&nbsp;public void resetGame() {<br/>
	   			<br/>
	      			&nbsp;&nbsp;&nbsp;&nbsp;//use AssetManager to get image file names from the assets folder<br/>
		  		&nbsp;&nbsp;&nbsp;&nbsp;//AssetManager: Provides access to an application's raw asset<br/>
	      			&nbsp;&nbsp;&nbsp;&nbsp;AssetManager assets = this.getAssets();<br/>
	      			&nbsp;&nbsp;&nbsp;&nbsp;fileNameList.clear(); // remove elements in the list of image names<br/>
	      			<br/>
	      			&nbsp;&nbsp;&nbsp;&nbsp;try {<br/>
	      			<br/>
	         		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// loop through each region<br/>
	         		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for (String region : regionsSet) {<br/>
	         		<br/>
	            		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// get a list of all flag image files in this region's folder<br/>
	            		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;String[] paths = assets.list(region);<br/>
				<br/>
	            		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for (String path : paths) {<br/>
	            		<br/>
	               		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fileNameList.add(path.replace(".png", ""));<br/>
	               		<br/>
	               		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br/>
	               		<br/>
	         		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} <br/>
	         		<br/>
	      			&nbsp;&nbsp;&nbsp;&nbsp;} catch (IOException exception) { <br/>
	      			<br/>
	      			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//Log the exception for debugging. e() logs error msgs<br/>
	         		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Log.e(TAG, "Error loading image file names", exception);<br/>
	         		<br/>
	      			&nbsp;&nbsp;&nbsp;&nbsp;}<br/>
	      			<br/>
	      			&nbsp;&nbsp;&nbsp;&nbsp;correctAnswers = 0; // reset the number of correct answers made<br/>
	      			&nbsp;&nbsp;&nbsp;&nbsp;totalGuesses = 0; // reset the total number of guesses the user made<br/>
	      			&nbsp;&nbsp;&nbsp;&nbsp;gameCountriesList.clear(); //remove elements in prior list of countries<br/>
	      			<br/>
	      			&nbsp;&nbsp;&nbsp;&nbsp;int flagCounter = 1;<br/>
	      			&nbsp;&nbsp;&nbsp;&nbsp;int numberOfFlags = fileNameList.size();<br/>
				<br/>
	      			&nbsp;&nbsp;&nbsp;&nbsp;// add FLAGS_IN_GAME random file names to the gameCountriesList<br/>
	      			&nbsp;&nbsp;&nbsp;&nbsp;while (flagCounter <= FLAGS_IN_GAME) {<br/>
	      			<br/>
	    	 		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// returns a random index between the range 0-number of flags<br/>
	         		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int randomIndex = random.nextInt(numberOfFlags);<br/> 
				<br/>
	         		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// get the random image file name from fileNameList<br/>
	         		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;String fileName = fileNameList.get(randomIndex);<br/>
	         		<br/>
	         		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//add a country name to the list only if it has not been added yet<br/>
	         		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(!gameCountriesList.contains(fileName)) {<br/>
	         		<br/>
	            		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;gameCountriesList.add(fileName); // add the file to the list<br/>
	            		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;++flagCounter;<br/>
	            		<br/>
	         		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br/>
	         		<br/>
	      			&nbsp;&nbsp;&nbsp;&nbsp;}<br/>
	      			<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;loadNextFlag(); // start the game by loading the first flag<br/>
	   			&nbsp;&nbsp;} // end method resetGame<br/>
				<br/>
				&nbsp;&nbsp;//**********************************************************************<br/>
	   			&nbsp;&nbsp;// after the user guesses a correct flag, load the next flag and buttons<br/>
	   			&nbsp;&nbsp;private void loadNextFlag() {<br/>
	   			<br/>
	      			&nbsp;&nbsp;&nbsp;&nbsp;// get file name of the next flag and remove it from the list<br/>
	      			&nbsp;&nbsp;&nbsp;&nbsp;String nextImage = gameCountriesList.remove(0);<br/>
	      			&nbsp;&nbsp;&nbsp;&nbsp;correctAnswer = nextImage; // update the correct answer<br/>
	      			&nbsp;&nbsp;&nbsp;&nbsp;answerTextView.setText(""); // clear answerTextView <br/>
				<br/>
	      			&nbsp;&nbsp;&nbsp;&nbsp;// display current question number<br/>
	      			&nbsp;&nbsp;&nbsp;&nbsp;questionNumberTextView.setText(getResources().getString(R.string.question, (correctAnswers + 1), FLAGS_IN_GAME));<br/>
				<br/>
	      			&nbsp;&nbsp;&nbsp;&nbsp;// extract the region from the next image's name. Remember the file names<br/>
	      			&nbsp;&nbsp;&nbsp;&nbsp;// in gameCounrtyList are formated as: regionName-countryName<br/>
	      			&nbsp;&nbsp;&nbsp;&nbsp;String region = nextImage.substring(0, nextImage.indexOf('-'));<br/>
				<br/>
	      			&nbsp;&nbsp;&nbsp;&nbsp;// use AssetManager to load next image from assets folder<br/>
	      			&nbsp;&nbsp;&nbsp;&nbsp;//'this' means: this activity<br/>
	      			&nbsp;&nbsp;&nbsp;&nbsp;AssetManager assets = this.getAssets(); <br/>
	      			&nbsp;&nbsp;&nbsp;&nbsp;try {<br/>
	      			<br/>
	         		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// get an InputStream to the asset representing the next flag<br/>
	    	 		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//ex: Africa/Africa-Algeria.png<br/>
	         		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;InputStream stream = assets.open(region + "/" + nextImage + ".png");<br/>
	         		<br/>
	         		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// load the asset as a Drawable and display on the flagImageView<br/>
	         		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Drawable flag = Drawable.createFromStream(stream, nextImage);<br/>
	         		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;flagImageView.setImageDrawable(flag);<br/>
	         		<br/>                      
	      			&nbsp;&nbsp;&nbsp;&nbsp;} catch (IOException exception) {<br/>
	      			<br/>
	         		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Log.e(TAG, "Error loading " + nextImage, exception);<br/>
	         		<br/>
	      			&nbsp;&nbsp;&nbsp;&nbsp;} <br/>
	      			<br/>
	      			&nbsp;&nbsp;&nbsp;&nbsp;Collections.shuffle(fileNameList); // shuffle file names<br/>
	      			&nbsp;&nbsp;&nbsp;&nbsp;//shuffle: Randomly permutes the list elements<br/>
				<br/>
	      			&nbsp;&nbsp;&nbsp;&nbsp;// put the correct answer at the end of fileNameList<br/>
	      			&nbsp;&nbsp;&nbsp;&nbsp;int correct = fileNameList.indexOf(correctAnswer);<br/>
	      			&nbsp;&nbsp;&nbsp;&nbsp;fileNameList.add(fileNameList.remove(correct));<br/>
				<br/>
	      			&nbsp;&nbsp;&nbsp;&nbsp;// add 3 guess Buttons<br/>
	      			&nbsp;&nbsp;&nbsp;&nbsp;// place Buttons in currentTableRow<br/>
	      			&nbsp;&nbsp;&nbsp;&nbsp;for (int btn = 0; btn < guessLinearLayout.getChildCount(); btn++) {<br/>
	      			<br/>
	         		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// get reference to Button to configure<br/>
	         		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Button newGuessButton = (Button) guessLinearLayout.getChildAt(btn);<br/>
	         		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;newGuessButton.setEnabled(true);<br/>
				<br/>
	         		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// get country name and set it as newGuessButton's text<br/>
	         		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;String fileName = fileNameList.get(btn);<br/>
	         		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;newGuessButton.setText(getCountryName(fileName));<br/>
	         		<br/>
	       			&nbsp;&nbsp;&nbsp;&nbsp;}<br/>
				<br/>	      
	      			&nbsp;&nbsp;&nbsp;&nbsp;// randomly replace one Button with the correct answer<br/>
	      			&nbsp;&nbsp;&nbsp;&nbsp;int btn = random.nextInt(3); // pick random button out of the three btns<br/>
	      			&nbsp;&nbsp;&nbsp;&nbsp;String countryName = getCountryName(correctAnswer);<br/>
	      			&nbsp;&nbsp;&nbsp;&nbsp;((Button) guessLinearLayout.getChildAt(btn)).setText(countryName);<br/>
	      			<br/>
	   			&nbsp;&nbsp;} // end method loadNextFlag<br/>
	   			<br/>
	 			&nbsp;&nbsp;//**********************************************************************<br/>
	   			&nbsp;&nbsp;// parses the country flag file name and returns the country name<br/>
	   			&nbsp;&nbsp;//country names are of the following format: North_America-Costa_Rica<br/>
	   			&nbsp;&nbsp;private String getCountryName(String name) {<br/>
	   			<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;String country = name.substring(name.indexOf("-")+1);<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;return country.replace('_', ' ');<br/>
				<br/>
	   			&nbsp;&nbsp;}<br/>
	   			<br/>
	 			&nbsp;&nbsp;//**********************************************************************<br/>
	   			&nbsp;&nbsp;//utility method that disables all buttons when the user gusses the country<br/>
	   			&nbsp;&nbsp;private void disableButtons() {<br/>
	   			<br/>
		   		&nbsp;&nbsp;&nbsp;&nbsp;for(int btn = 0; btn < guessLinearLayout.getChildCount(); btn++) {<br/>
		   		<br/>
			   	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;guessLinearLayout.getChildAt(btn).setEnabled(false);<br/>
			   	<br/>
		   		&nbsp;&nbsp;&nbsp;&nbsp;}<br/>
		   		<br/>
	   			&nbsp;&nbsp;}<br/>
	   			<br/>
	 			&nbsp;&nbsp;//**********************************************************************<br/>
	   			&nbsp;&nbsp;//guessButtonListener is an anonymous inner class object that implements<br/>
	   			&nbsp;&nbsp;//the OnClickListener interface which responds to button click events.<br/>
	   			&nbsp;&nbsp;private OnClickListener guessButtonListener = new OnClickListener() {<br/>
	   			<br/>
	      			&nbsp;&nbsp;&nbsp;&nbsp;@Override<br/>
	      			&nbsp;&nbsp;&nbsp;&nbsp;public void onClick(View v) {//v is a Button here<br/>
				<br/>
	         		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Button guessButton = ((Button) v);<br/>
	         		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;String guess = guessButton.getText().toString();<br/>
	         		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;String answer = getCountryName(correctAnswer);<br/>
	         		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;totalGuesses++; // increment number of guesses the user has made<br/>
	         		<br/>
	         		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (guess.equals(answer)) {// if the guess is correct
				<br/>
	            		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;++correctAnswers; // increment the number of correct answers<br/>
	            		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// display correct answer in green text<br/>
	            		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;answerTextView.setText(answer + "!");<br/>
	            		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;answerTextView.setTextColor(getResources().getColor(R.color.correct_answer));<br/>
				<br/>
	            		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;disableButtons(); // disable all guess Buttons<br/>
	            		<br/>
	            		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// if the user has correctly identified FLAGS_IN_QUIZ flags<br/>
	            		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (correctAnswers == FLAGS_IN_GAME) {<br/>
	            		<br/>
	               		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// DialogFragment to display game stats and start new game<br/>
	               		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DialogFragment gameResultsDialog = new DialogFragment() {<br/>
	               		<br/>
	                     	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// create an AlertDialog and return it<br/>
	                     	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;@Override<br/>
	                     	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;public Dialog onCreateDialog(Bundle bundle) {<br/>
	                     	<br/>
	                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AlertDialog.Builder builder = new AlertDialog.Builder(getActivity());<br/>
	                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;builder.setCancelable(false);<br/>
	                        <br/>
	                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;builder.setMessage(getResources().getString(R.string.results,totalGuesses, (1000 / (double) totalGuesses)));<br/>
	                        <br/>
	                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// "Reset game" Button<br/>                            
	                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;builder.setPositiveButton(R.string.reset_quiz,new DialogInterface.OnClickListener(){<br/>
	                        <br/>
	                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;public void onClick(DialogInterface dialog,int id) {<br/>
	                        <br/>
	                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;resetGame();<br/>
	                        <br/>
	                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br/>
	                        <br/>
	                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}); // end call to setPositiveButton<br/>
	                        <br/>
	                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return builder.create(); // return the AlertDialog<br/>
	                        <br/>
	                     	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} // end method onCreateDialog<br/>
	                     	<br/>
	                  	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}; // end DialogFragment anonymous inner class<br/>
	               		<br/>
	              	 	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// use FragmentManager to display the DialogFragment<br/>
	               		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;gameResultsDialog.show(getFragmentManager(), "Game Results");<br/>
	               		<br/>
	            		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else {<br/>
	            		<br/>
	               		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// load the next flag after a 1-second delay<br/>
	               		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;handler.postDelayed(new Runnable() {<br/>
	               		<br/>
	            		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//new Rnnable(): anonym inner class that implements the runnable interface<br/>
	                     	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;@Override<br/>
	                    	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;public void run() {<br/>
	                    	<br/>
	                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;loadNextFlag();<br/>
	                        <br/>
	                     	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br/>
	                     	<br/>
	                  	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}, 2000); // 2000 milliseconds for 2-second delay<br/>
	                  	<br/>
	            		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br/>
	            		<br/>
	         		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else {<br/>
	         		<br/>
	            		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;flagImageView.startAnimation(shakeAnimation); // play shake<br/>
				<br/>
	            		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// display "Incorrect!" in red<br/>
	            		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;answerTextView.setText(R.string.incorrect_answer);<br/>
	            		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;answerTextView.setTextColor(getResources().getColor(R.color.incorrect_answer));<br/>
	            		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;guessButton.setEnabled(false); // disable incorrect answer<br/>
	            		<br/>
	         		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br/>
	         		<br/>
	      			&nbsp;&nbsp;&nbsp;&nbsp;} // end method onClick<br/>
	      			<br/>
	   			&nbsp;&nbsp;}; // end answerButtonListener<br/>
	   			<br/>
				}//End MainActivity
			</div>
		<a href="<?php echo $siteurl ?>/php/lessons/java.php" class="btn btn-select-plan btn-sm btn-learn previous-button"><i class="icon-arrow-left"></i> Back to Examples</a>
		</div>
	</div>
</div>
<?php include("../../../masters/footer.php"); ?>