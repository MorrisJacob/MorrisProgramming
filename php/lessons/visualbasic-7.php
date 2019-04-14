<?php include("../masters/header.php"); ?>

<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner"
 style="background-image:url(<?php echo $siteurl ?>/images/img_bg_2.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1>Beginning Visual Basic: Part 7</h1>
							<h2>Using DateTime and TimeSpan in <span class="redcolor">Visual Basic</span>.</h2>
						</div>
					</div>
				</div>
			</div>
		</div>
</header>

<div class="container">
	<div class="row">
		<div class="col-xs-12" style="margin: 50px 0;">
			<p>
				DateTime and TimeSpan also have many methods and functions corresponding to them. For example, to get Today's date, we can use the following:
			</p>
			<div class="mp-code-example">
				Dim TodayDate As DateTime = DateTime.Now
			</div>
			<p>
				Now, if we wanted to add 100 days to today's date, we can simply do the following:
			</p>
			<div class="mp-code-example">
				TodayDate.AddDays(100)
			</div>
			<p>
				Also, if we wanted the year of the new date, we can use something like this:
			</p>
			<div class="mp-code-example">
				TodayDate.Year
			</div>
			<p>
				Now that we understand these basics, we can move on to the more complex methods. For example, if we want to subtract one DateTime object from another, we can easily use the .Subtract() function. 
				Here is an easy example to understand:
			</p>
			<div class="mp-code-example">
				Dim CurrentDate As DateTime = DateTime.Now<br/>
				Dim FutureDate As DateTime = CurrentDate.AddHours(30)<br/>
				Dim Difference as TimeSpan = FutureDate.Subtract(CurrentDate)
			</div>
			<p>
				Now we have the difference between these two DateTime variables in a TimeSpan variable named "Difference." If we wanted to convert this difference to only minutes, we can do the following:
			</p>
			<div class="mp-code-example">
				Dim intMinutes As Integer = Difference.TotalMinutes
			</div>
			<p>
				<strong>NOTE: </strong>The .Add() and .Subtract() functions can be easily replaced by their Mathematic equivalents (+ or -, respectively).
			</p>
			<p>
				DateTime has an abundance of useful functions, including the following:
			</p>
			<ul>
				<li><strong>.Now -</strong> Returns the current date and time as a DateTime object.</li>
				<li><strong>.Today -</strong> Returns the current date as a DateTime object, but leaves the time at 00:00:00.</li>
				<li><strong>.Year -</strong> Returns the year of the DateTime as an integer.</li>
				<li><strong>.Month -</strong> Returns the month of the DateTime as an integer.</li>
				<li><strong>.Day -</strong> Returns the day of the month of the DateTime as an integer.</li>
				<li><strong>.Hour -</strong> Returns the Hour of the DateTime as an integer. This is <strong>NOT</strong> military time. For example, if the time is 2:00 PM, this function will return 2, not 14.</li>
				<li><strong>.Minute -</strong> Returns the minute of the hour of the DateTime as an integer.</li>
				<li><strong>.Second -</strong> Returns the second of the minute of the DateTime as an integer.</li>
				<li><strong>.Millisecond -</strong> Returns the millisecond of the second of the DateTime as an integer.</li>
				<li><strong>.Date -</strong> Forms the datetime to a short hand, easy to read DateTime.</li>
				<li><strong>.DayOfWeek -</strong> Returns day of week. This can be returned as a string ("Sunday" through "Saturday"), or as an integer (0-6).</li>
				<li><strong>.Add(TimeSpan) -</strong> Adds a TimeSpan object to a DateTime object, and returns the new DateTime.</li>
				<li><strong>.Subtract(TimeSpan) -</strong> Subtracts a TimeSpan object from a DateTime object, and returns the new DateTime.</li>
				<li><strong>.AddYears(int) -</strong> Adds the specified number of years (integer) to the DateTime. This function can accept negative numbers to subtract years.</li>
				<li><strong>.AddMonths(int) -</strong> Adds the specified number of months (integer) to the DateTime. This function can accept negative numbers to subtract months.</li>
				<li><strong>.AddDays(int) -</strong> Adds the specified number of days (integer) to the DateTime. This function can accept negative numbers to subtract days.</li>
				<li><strong>.AddHours(int) -</strong> Adds the specified number of hours (integer) to the DateTime. This function can accept negative numbers to subtract hours.</li>
				<li><strong>.AddMinutes(int) -</strong> Adds the specified number of minutes (integer) to the DateTime. This function can accept negative numbers to subtract minutes.</li>
				<li><strong>.AddSeconds(int) -</strong> Adds the specified number of seconds (integer) to the DateTime. This function can accept negative numbers to subtract seconds.</li>
				<li><strong>.AddMilliseconds(int) -</strong> Adds the specified number of milliseconds (integer) to the DateTime. This function can accept negative numbers to subtract milliseconds.</li>
				<li><strong>.DaysInMonth() -</strong> Returns the number of days of the month of the DateTime.</li>
				<li><strong>.IsLeapYear() -</strong> Returns a Boolean object (True/False) depending on if the year of the DateTime is a leap year.</li>
				<li><strong>.ToString() -</strong> Returns a String of the DateTime object.</li>
				<li><strong>.ToString(String) -</strong> Returns a String of the DateTime object. This function allows you to specify the structure of the returned string.</li>
			</ul>
			<p>
				TimeSpan has many helpful functions as well, including:
			</p>
			<ul>
				<li><strong>.Days -</strong> Returns the number of whole days in the TimeSpan as an integer.</li>
				<li><strong>.Hours -</strong> Returns the number of whole hours in the TimeSpan as an integer.</li>
				<li><strong>.Minutes -</strong> Returns the number of whole minutes in the TimeSpan as an integer.</li>
				<li><strong>.Seconds -</strong> Returns the number of whole seconds in the TimeSpan as an integer.</li>
				<li><strong>.Milliseconds -</strong> Returns the number of whole seconds in the TimeSpan as an integer.</li>
				<li><strong>.TotalDays -</strong> Returns the number of days in the TimeSpan as a double. This may include a fractional value.</li>
				<li><strong>.TotalHours -</strong> Returns the number of hours in the TimeSpan as a double. This may include a fractional value.</li>
				<li><strong>.TotalMinutes -</strong> Returns the number of minutes in the TimeSpan as a double. This may include a fractional value.</li>
				<li><strong>.TotalSeconds -</strong> Returns the number of seconds in the TimeSpan as a double. This may include a fractional value.</li>
				<li><strong>.TotalMilliseconds -</strong> Returns the number of milliseconds in the TimeSpan as a double. This may include a fractional value.</li>
				<li><strong>.Add(TimeSpan) -</strong> Returns a TimeSpan object of the two TimeSpan objects combined.</li>
				<li><strong>.Subtract(TimeSpan) -</strong> Returns a TimeSpan object of the original TimeSpan after the argument has been removed.</li>
				<li><strong>.FromDays(int) -</strong> Returns a TimeSpan object as many days as the argument provides. For example:
					<div class="mp-code-example">
						Dim NewTime as TimeSpan = TimeSpan.FromDays(3)
					</div>
					<p>
						This will return a TimeSpan object that is 3 days long.
					</p>
				</li>
				<li><strong>.FromHours(int) -</strong> Returns a TimeSpan object as many hours as the argument provides.</li>
				<li><strong>.FromMinutes(int) -</strong> Returns a TimeSpan object as many minutes as the argument provides.</li>
				<li><strong>.FromSeconds(int) -</strong> Returns a TimeSpan object as many seconds as the argument provides.</li>
				<li><strong>.FromMilliseconds(int) -</strong> Returns a TimeSpan object as many milliseconds as the argument provides.</li>
				<li><strong>.ToString() -</strong> Returns a String of the TimeSpan object.</li>
				<li><strong>.ToString(String) -</strong> Returns a String of the TimeSpan object. This function allows you to specify the structure of the returned string.</li>
			</ul>
			<p>
				Next we will discuss arrays and the functions available for them, as well.
			</p>
			<a href="<?php echo $siteurl ?>/php/lessons/visualbasic-6.php" class="btn btn-select-plan btn-sm btn-learn previous-button"><i class="icon-arrow-left"></i> Previous</a>
			<a href="<?php echo $siteurl ?>/php/lessons/visualbasic-8.php" class="btn btn-select-plan btn-sm btn-learn next-button">Next <i class="icon-arrow-right"></i></a>
		</div>
	</div>
</div>
<?php include("../masters/footer.php"); ?>