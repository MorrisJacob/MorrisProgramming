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
							<h2><span class="redcolor">activity main</span>.</h2>
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
				&lt;LinearLayout xmlns:android="http://schemas.android.com/apk/res/android"<br/>
   				&nbsp;&nbsp;xmlns:tools="http://schemas.android.com/tools"<br/>
    				&nbsp;&nbsp;android:id="@+id/guessGameLinearLayout"<br/>
    				&nbsp;&nbsp;android:layout_width="match_parent"<br/>
    				&nbsp;&nbsp;android:layout_height="match_parent"<br/>
    				&nbsp;&nbsp;android:orientation="vertical"<br/>
    				&nbsp;&nbsp;android:paddingBottom="@dimen/activity_vertical_margin"<br/>
    				&nbsp;&nbsp;android:paddingLeft="@dimen/activity_horizontal_margin"<br/>
    				&nbsp;&nbsp;android:paddingRight="@dimen/activity_horizontal_margin"<br/>
    				&nbsp;&nbsp;android:paddingTop="@dimen/activity_vertical_margin"<br/>
    				&nbsp;&nbsp;tools:context="com.example.flagguessinggamev1.MainActivity$PlaceholderFragment" &gt;<br/>
				<br/>
				&lt;TextView<br/>
 	       			&nbsp;&nbsp;android:id="@+id/questionNumberTextView"<br/>
        			&nbsp;&nbsp;android:layout_width="wrap_content"<br/>
        			&nbsp;&nbsp;android:layout_height="wrap_content"<br/>
        			&nbsp;&nbsp;android:layout_gravity="center"<br/>
        			&nbsp;&nbsp;android:text="@string/question" /&gt;<br/>
				<br/>
    				&lt;ImageView<br/>
        			&nbsp;&nbsp;android:id="@+id/flagImageView"<br/>
        			&nbsp;&nbsp;android:layout_width="wrap_content"<br/>
        			&nbsp;&nbsp;android:layout_height="0dp"<br/>
        			&nbsp;&nbsp;android:layout_gravity="center"<br/>
        			&nbsp;&nbsp;android:layout_marginBottom="@dimen/activity_vertical_margin"<br/>
        			&nbsp;&nbsp;android:layout_marginLeft="@dimen/activity_horizontal_margin"<br/>
        			&nbsp;&nbsp;android:layout_marginRight="@dimen/activity_horizontal_margin"<br/>
        			&nbsp;&nbsp;android:layout_marginTop="@dimen/activity_vertical_margin"
        			&nbsp;&nbsp;android:layout_weight="1"<br/>
        			&nbsp;&nbsp;android:adjustViewBounds="true"<br/>
        			&nbsp;&nbsp;android:contentDescription="@string/image_description"<br/>
        			&nbsp;&nbsp;android:scaleType="fitCenter"<br/>
        			&nbsp;&nbsp;android:src="@drawable/ic_launcher" /&gt;<br/>
				<br/>
    				&lt;TextView<br/>
        			&nbsp;&nbsp;android:id="@+id/guessCountryTextView"<br/>
        			&nbsp;&nbsp;android:layout_width="wrap_content"<br/>
        			&nbsp;&nbsp;android:layout_height="wrap_content"<br/>
        			&nbsp;&nbsp;android:layout_gravity="center_horizontal"<br/>
        			&nbsp;&nbsp;android:text="@string/guess_country" /&gt;<br/>
				<br/>
    				&lt;LinearLayout<br/>
        			&nbsp;&nbsp;android:id="@+id/buttonsLinearLayout"<br/>
        			&nbsp;&nbsp;android:layout_width="match_parent"<br/>
        			&nbsp;&nbsp;android:layout_height="wrap_content"<br/>
        			&nbsp;&nbsp;android:layout_marginBottom="@dimen/spacing"<br/>
        			&nbsp;&nbsp;android:orientation="horizontal" &gt;<br/>
				<br/>
        			&lt;Button<br/>
            			&nbsp;&nbsp;android:id="@+id/button1"<br/>
            			&nbsp;&nbsp;style="?android:attr/buttonStyleSmall"<br/>
            			&nbsp;&nbsp;android:layout_width="0dp"<br/>
            			&nbsp;&nbsp;android:layout_height="fill_parent"<br/>
            			&nbsp;&nbsp;android:layout_weight="1" /&gt;<br/>
				<br/>
        			&lt;Button<br/>
           			&nbsp;&nbsp;android:id="@+id/button2"<br/>
           			&nbsp;&nbsp;style="?android:attr/buttonStyleSmall"<br/>
            			&nbsp;&nbsp;android:layout_width="0dp"<br/>
            			&nbsp;&nbsp;android:layout_height="fill_parent"<br/>
            			&nbsp;&nbsp;android:layout_weight="1" /&gt;<br/>
				<br/>
       				&lt;Button<br/>
       				&nbsp;&nbsp;android:id="@+id/button3"<br/>
            			&nbsp;&nbsp;style="?android:attr/buttonStyleSmall"<br/>
            			&nbsp;&nbsp;android:layout_width="0dp"<br/>
            			&nbsp;&nbsp;android:layout_height="fill_parent"<br/>
            			&nbsp;&nbsp;android:layout_weight="1" /&gt;<br/>
				<br/>
    				&lt;/LinearLayout&gt;<br/>
				<br/>
    				&lt;TextView<br/>
        			&nbsp;&nbsp;android:id="@+id/answerTextView"<br/>
        			&nbsp;&nbsp;android:layout_width="wrap_content"<br/>
        			&nbsp;&nbsp;android:layout_height="wrap_content"<br/>
        			&nbsp;&nbsp;android:layout_gravity="bottom|center"<br/>
        			&nbsp;&nbsp;android:textSize="@dimen/answer_size"<br/>
        			&nbsp;&nbsp;android:textStyle="bold" /><br/>
				<br/>
				&lt;/LinearLayout&gt;
			</div>
		<a href="<?php echo $siteurl ?>/php/lessons/java.php" class="btn btn-select-plan btn-sm btn-learn previous-button"><i class="icon-arrow-left"></i> Back to Examples</a>
		</div>
	</div>
</div>
<?php include("../../../masters/footer.php"); ?>