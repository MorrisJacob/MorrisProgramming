<?php include("../../../masters/header.php"); ?>

<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner"
 style="background-image:url(<?php echo $siteurl ?>/images/img_bg_2.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1>Java Example: Calculator</h1>
							<h2><span class="redcolor">Calculator Frame</span>.</h2>
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
				package edu.iuk.Calculator;<br/>
				<br/>
				import java.awt.GridLayout;<br/>
				import java.awt.event.ActionEvent;<br/>
				import java.awt.event.ActionListener;<br/>
				<br/>
				//Use the eval() function from JavaScript<br/>
				import javax.script.ScriptEngine;<br/>
				import javax.script.ScriptEngineManager;<br/>
i				mport javax.script.ScriptException;<br/>
				import javax.swing.JButton;<br/>
				import javax.swing.JFrame;<br/>
				import javax.swing.JPanel;<br/>
				import javax.swing.JTextField;<br/>
				<br/>
				public class CalculatorFrame extends JFrame {<br/>
				<br/>
				&nbsp;&nbsp;private final JButton keys[];<br/>
				&nbsp;&nbsp;private final JPanel keyPadJPanel;<br/>
				&nbsp;&nbsp;private final JTextField lcdJTextField;<br/>
				<br/>
				&nbsp;&nbsp;// constructor sets up GUI<br/>
				&nbsp;&nbsp;public CalculatorFrame() {<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;lcdJTextField = new JTextField(20); // create lcdJTextField<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;lcdJTextField.setEditable(true); // allow user input<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;keys = new JButton[20]; // array keys contains 16 JButtons<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;// initialize all digit key buttons<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;for (int i = 0; i <= 9; i++){<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;keys[i] = new JButton(String.valueOf(i));<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;}<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;// initialize all function key buttons<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;keys[10] = new JButton("/");<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;keys[11] = new JButton("*");<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;keys[12] = new JButton("-");<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;keys[13] = new JButton("+");<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;keys[14] = new JButton("=");<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;keys[15] = new JButton("C");<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;// set keyPadJPanel layout to grid layout<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;keyPadJPanel = new JPanel();<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;keyPadJPanel.setLayout(new GridLayout(4, 4));<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;// add buttons to keyPadJPanel panel<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;// 7, 8, 9, divide<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;for (int i = 7; i <= 10; i++){<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;keyPadJPanel.add(keys[i]);<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;}<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;// 4, 5, 6<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;for (int i = 4; i <= 6; i++){<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;keyPadJPanel.add(keys[i]);<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;}<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;// multiply<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;keyPadJPanel.add(keys[11]);<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;// 1, 2, 3<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;for (int i = 1; i <= 3; i++){<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;keyPadJPanel.add(keys[i]);<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;}<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;// subtract<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;keyPadJPanel.add(keys[12]);<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;// 0, C, =, +<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;keyPadJPanel.add(keys[0]);<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;keyPadJPanel.add(keys[15]);<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;keyPadJPanel.add(keys[14]);<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;keyPadJPanel.add(keys[13]);<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;// Write code that adds components to (default) border layout<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;// ...............<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;add("North", lcdJTextField);<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;add("Center", keyPadJPanel);<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;// Code Create button actions ..................<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;ClickAction handler = new ClickAction();<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;for (int i = 0; i <= 15; i++) {<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;keys[i].addActionListener(handler);<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;}<br/>
				<br/>
				&nbsp;&nbsp;} // end CalculatorFrame constructor<br/>
				<br/>
				&nbsp;&nbsp;// **************************************************************************************<br/>
				&nbsp;&nbsp;// An action listener 'inner class' that creates event handlers for button<br/>
				<br/>
				&nbsp;&nbsp;// clicks:<br/>
				&nbsp;&nbsp;private class ClickAction implements ActionListener {<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;String textFieldInput = "";<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;@Override<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;public void actionPerformed(ActionEvent event) {<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (event.getSource() == keys[0]) {<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;textFieldInput += "0";<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else if (event.getSource() == keys[1]) {<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;textFieldInput += "1";<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else if (event.getSource() == keys[2]) {<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;textFieldInput += "2";<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else if (event.getSource() == keys[3]) {<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;textFieldInput += "3";<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else if (event.getSource() == keys[4]) {<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;textFieldInput += "4";<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else if (event.getSource() == keys[5]) {<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;textFieldInput += "5";<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else if (event.getSource() == keys[6]) {<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;textFieldInput += "6";<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else if (event.getSource() == keys[7]) {<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;textFieldInput += "7";<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else if (event.getSource() == keys[8]) {<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;textFieldInput += "8";<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else if (event.getSource() == keys[9]) {<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;textFieldInput += "9";<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else if (event.getSource() == keys[10]) {<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;textFieldInput += "/";<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else if (event.getSource() == keys[11]) {<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;textFieldInput += "*";<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else if (event.getSource() == keys[12]) {<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;textFieldInput += "-";<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else if (event.getSource() == keys[13]) {<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;textFieldInput += "+";<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// This is the equals button<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else if (event.getSource() == keys[14]) {<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// create a script engine manager<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ScriptEngineManager factory = new ScriptEngineManager();<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// create a JavaScript engine<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ScriptEngine engine = factory.getEngineByName("JavaScript");<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// evaluate JavaScript code from String<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;try {<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Object Text = engine.eval(textFieldInput);<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;textFieldInput = String.valueOf(Text);<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} catch (ScriptException e) {<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// TODO Auto-generated catch block<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;e.printStackTrace();<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// This is the clear button<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else if (event.getSource() == keys[15]) {<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;textFieldInput = "";<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;lcdJTextField.setText(textFieldInput);<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;}// end actionPerformed<br/>
				<br/>
				&nbsp;&nbsp;}// end ClickAction<br/>
				<br/>
				} // end class CalculatorFrame
			</div>
		<a href="<?php echo $siteurl ?>/php/lessons/java.php" class="btn btn-select-plan btn-sm btn-learn previous-button"><i class="icon-arrow-left"></i> Back to Examples</a>
		</div>
	</div>
</div>
<?php include("../../../masters/footer.php"); ?>