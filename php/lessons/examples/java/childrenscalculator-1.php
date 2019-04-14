<?php include("../../../masters/header.php"); ?>

<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner"
 style="background-image:url(<?php echo $siteurl ?>/images/img_bg_2.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1>Android Development Example: Children's Calculator</h1>
							<h2><span class="redcolor">Main Activity Class</span>.</h2>
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
				package com.example.childrencalculator;<br/>
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
				import android.widget.TextView;<br/>
				import android.os.Build;<br/>
				<br/>
				public class MainActivity extends Activity {<br/>
				<br/>
				&nbsp;&nbsp;private Button button0;<br/>
				&nbsp;&nbsp;private Button button1;<br/>
				&nbsp;&nbsp;private Button button2;<br/>
				&nbsp;&nbsp;private Button button3;<br/>
				&nbsp;&nbsp;private Button button4;<br/>
				&nbsp;&nbsp;private Button button5;<br/>
				&nbsp;&nbsp;private Button button6;<br/>
				&nbsp;&nbsp;private Button button7;<br/>
				&nbsp;&nbsp;private Button button8;<br/>
				&nbsp;&nbsp;private Button button9;<br/>
				&nbsp;&nbsp;private Button buttonClear;<br/>
				&nbsp;&nbsp;private Button buttonDivide;<br/>
				&nbsp;&nbsp;private Button buttonMultiply;<br/>
				&nbsp;&nbsp;private Button buttonAdd;<br/>
				&nbsp;&nbsp;private Button buttonSubtract;<br/>
				&nbsp;&nbsp;private TextView numberTextView;<br/>
				&nbsp;&nbsp;private TextView smileyTextView;<br/>
				&nbsp;&nbsp;public int currentAmount=0;<br/>
				&nbsp;&nbsp;public int buttonClicked =0;<br/>
				<br/>
				&nbsp;&nbsp;@Override<br/>
				&nbsp;&nbsp;protected void onCreate(Bundle savedInstanceState) {<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;super.onCreate(savedInstanceState);<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;setContentView(R.layout.activity_main);<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;numberTextView = (TextView) findViewById(R.id.numberTextView);<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;smileyTextView = (TextView) findViewById(R.id.smileyTextView);<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;buttonClear = (Button) findViewById(R.id.clearButton);<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;button0 = (Button) findViewById(R.id.zeroButton);<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;button1 = (Button) findViewById(R.id.oneButton);<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;button2 = (Button) findViewById(R.id.twoButton);<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;button3 = (Button) findViewById(R.id.threeButton);<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;button4 = (Button) findViewById(R.id.fourButton);<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;button5 = (Button) findViewById(R.id.fiveButton);<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;button6 = (Button) findViewById(R.id.sixButton);<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;button7 = (Button) findViewById(R.id.sevenButton);<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;button8 = (Button) findViewById(R.id.eightButton);<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;button9 = (Button) findViewById(R.id.nineButton);<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;buttonDivide = (Button) findViewById(R.id.divideButton);<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;buttonMultiply = (Button) findViewById(R.id.multiplyButton);<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;buttonAdd = (Button) findViewById(R.id.plusButton);<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;buttonSubtract = (Button) findViewById(R.id.minusButton);<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;buttonClear = (Button) findViewById(R.id.clearButton);<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;//Write the event handler here:<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;buttonClear.setOnClickListener(new View.OnClickListener() {<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;@Override<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;public void onClick(View v) {<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;numberTextView.setText("");<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;smileyTextView.setText("");<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;currentAmount = 0;<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;buttonClicked = 0;<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;});<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;button1 = (Button) findViewById(R.id.oneButton);<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;//Write the event handler here:<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;button1.setOnClickListener(new View.OnClickListener() {<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;@Override<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;public void onClick(View v) {<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;numberTextView.setText("1");<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;buttonClicked = 1;<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;});<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;button2 = (Button) findViewById(R.id.twoButton);<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;//Write the event handler here:<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;button2.setOnClickListener(new View.OnClickListener() {<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;@Override<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;public void onClick(View v) {<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;numberTextView.setText("2");<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;buttonClicked = 2;
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;});<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;button3 = (Button) findViewById(R.id.threeButton);<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;//Write the event handler here:<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;button3.setOnClickListener(new View.OnClickListener() {<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;@Override<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;public void onClick(View v) {<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;numberTextView.setText("3");<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;buttonClicked = 3;<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;});<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;button4 = (Button) findViewById(R.id.fourButton);<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;//Write the event handler here:<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;button4.setOnClickListener(new View.OnClickListener() {<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;@Override<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;public void onClick(View v) {<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;numberTextView.setText("4");<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;buttonClicked = 4;<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;});<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;button5 = (Button) findViewById(R.id.fiveButton);<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;//Write the event handler here:<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;button5.setOnClickListener(new View.OnClickListener() {<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;@Override<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;public void onClick(View v) {<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;numberTextView.setText("5");<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;buttonClicked = 5;<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;});<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;button6 = (Button) findViewById(R.id.sixButton);<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;//Write the event handler here:<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;button6.setOnClickListener(new View.OnClickListener() {<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;@Override<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;public void onClick(View v) {<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;numberTextView.setText("6");<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;buttonClicked = 6;<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;});<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;button7 = (Button) findViewById(R.id.sevenButton);<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;//Write the event handler here:<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;button7.setOnClickListener(new View.OnClickListener() {<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;@Override<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;public void onClick(View v) {<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;numberTextView.setText("7");<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;buttonClicked = 7;<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;});<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;button8 = (Button) findViewById(R.id.eightButton);<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;//Write the event handler here:<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;button8.setOnClickListener(new View.OnClickListener() {<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;@Override<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;public void onClick(View v) {<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;numberTextView.setText("8");<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;buttonClicked = 8;<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;});<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;button9 = (Button) findViewById(R.id.nineButton);<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;//Write the event handler here:<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;button9.setOnClickListener(new View.OnClickListener() {<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;@Override<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;public void onClick(View v) {<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;numberTextView.setText("9");<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;buttonClicked = 9;<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;});<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;button0 = (Button) findViewById(R.id.zeroButton);<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;//Write the event handler here:<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;button0.setOnClickListener(new View.OnClickListener() {<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;@Override<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;public void onClick(View v) {<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;numberTextView.setText("0");<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;buttonClicked = 0;<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;});<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;buttonDivide = (Button) findViewById(R.id.divideButton);<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;//Write the event handler here:<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;buttonDivide.setOnClickListener(new View.OnClickListener() {<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;@Override<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;public void onClick(View v) {<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (buttonClicked != 0) {<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;numberTextView.setText(Integer.toString(Calculator.divideInput(currentAmount, buttonClicked)));<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;currentAmount = Calculator.divideInput(currentAmount, buttonClicked);<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;smileyTextView.setText(Faces.determineFace(currentAmount));<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;});<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;buttonMultiply = (Button) findViewById(R.id.multiplyButton);<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;//Write the event handler here:<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;buttonMultiply.setOnClickListener(new View.OnClickListener() {<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;@Override<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;public void onClick(View v) {<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;numberTextView.setText(Integer.toString(Calculator.multiplyInput(currentAmount, buttonClicked)));<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;currentAmount = Calculator.multiplyInput(currentAmount, buttonClicked);<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;smileyTextView.setText(Faces.determineFace(currentAmount));<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;});<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;buttonAdd = (Button) findViewById(R.id.plusButton);<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;//Write the event handler here:<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;buttonAdd.setOnClickListener(new View.OnClickListener() {<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;@Override<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;public void onClick(View v) {<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;numberTextView.setText(Integer.toString(Calculator.addInput(currentAmount, buttonClicked)));<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;currentAmount = Calculator.addInput(currentAmount, buttonClicked);<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;smileyTextView.setText(Faces.determineFace(currentAmount));<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;});<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;buttonSubtract = (Button) findViewById(R.id.minusButton);<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;//Write the event handler here:<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;buttonSubtract.setOnClickListener(new View.OnClickListener() {<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;@Override<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;public void onClick(View v) {<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;numberTextView.setText(Integer.toString(Calculator.subtractInput(currentAmount, buttonClicked)));<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;currentAmount = Calculator.subtractInput(currentAmount, buttonClicked);<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;smileyTextView.setText(Faces.determineFace(currentAmount));<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;});<br/>
				<br/>
				&nbsp;&nbsp;}<br/>
				<br/>
				}<br/>
			</div>
		<a href="<?php echo $siteurl ?>/php/lessons/java.php" class="btn btn-select-plan btn-sm btn-learn previous-button"><i class="icon-arrow-left"></i> Back to Examples</a>
		</div>
	</div>
</div>
<?php include("../../../masters/footer.php"); ?>