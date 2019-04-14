<?php include("../../../masters/header.php"); ?>

<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner"
 style="background-image:url(<?php echo $siteurl ?>/images/img_bg_2.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1>Java Example: Anroid Application</h1>
							<h2><span class="redcolor">Weight Loss Application</span>.</h2>
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
				package com.example.caloriesapplication;<br/>
				<br/>
				import android.app.Activity;<br/>
				import android.app.ActionBar;<br/>
				import android.app.Fragment;<br/>
				import android.os.Bundle;<br/>
				import android.view.LayoutInflater;<br/>
				import android.view.Menu;<br/>
				import android.view.MenuItem;<br/>
				import android.view.View;<br/>
				import android.view.ViewGroup;<br/>
				import android.widget.Button;<br/>
				import android.widget.EditText;<br/>
				import android.widget.TextView;<br/>
				import android.os.Build;<br/>
				<br/>
				public class MainActivity extends Activity {<br/>
				<br/>
				&nbsp;&nbsp;//Declare variables<br/>
				&nbsp;&nbsp;private Button buttonCalculate;<br/>
				&nbsp;&nbsp;private TextView caloriesTextView;<br/>
				&nbsp;&nbsp;private TextView poundsTextView;<br/>
				&nbsp;&nbsp;private EditText bicyclingEditText;<br/>
				&nbsp;&nbsp;private EditText joggingEditText;<br/>
				&nbsp;&nbsp;private EditText swimmingEditText;<br/>
				&nbsp;&nbsp;private double caloriesBurned;<br/>
				&nbsp;&nbsp;private double poundsLost;<br/>
				<br/>
				&nbsp;&nbsp;@Override<br/>
				&nbsp;&nbsp;protected void onCreate(Bundle savedInstanceState) {<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;super.onCreate(savedInstanceState);<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;setContentView(R.layout.activity_main);<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;//instantiate variables<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;buttonCalculate = (Button) findViewById(R.id.calculateButton);<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;caloriesTextView = (TextView) findViewById(R.id.caloriesBurnedTextView);<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;poundsTextView = (TextView) findViewById(R.id.poundsLostTextView);<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;bicyclingEditText = (EditText) findViewById(R.id.BicyclingEditText);<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;joggingEditText = (EditText) findViewById(R.id.joggingEditText);<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;swimmingEditText = (EditText) findViewById(R.id.swimmingEditText);<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;//introduce an onClickListener<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;buttonCalculate.setOnClickListener(new View.OnClickListener() {<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;@Override<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;public void onClick(View v) {<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//add all of the calories burned for all three exercises<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;caloriesBurned = Double.parseDouble((bicyclingEditText.getText().toString())) * 3.4;<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;caloriesBurned += Double.parseDouble((joggingEditText.getText().toString())) * 8;<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;caloriesBurned += Double.parseDouble((swimmingEditText.getText().toString())) * 4.5;<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//divide that by 3500 to find pounds lost. round to three decimal places<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;poundsLost = (long) (caloriesBurned/3500 * 1000) / 1000.0;<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//Set the text of calories burned<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;caloriesTextView.setText(String.valueOf(caloriesBurned));<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//set the text of pounds lost<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;poundsTextView.setText(String.valueOf(poundsLost));<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;<br/>});
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