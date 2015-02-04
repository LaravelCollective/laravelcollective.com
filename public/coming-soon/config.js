/* ---------------------------
 * Some Configuration of Theme
 * ---------------------------
 */

window.config = {

	/* # -- Countdown Settings
	================================================== */
	
	// date/time to count down to
	// Formate of date: MOUNTH DAY, YEAR HOURS:MINUTES:SECONDS
	end: 'February, 16 2015 10:00:00',
	
	// Set TRUE if you want to synchronize time with your server else FALSE
	countdownServer: true,
	
	// A URL to load upon expiry, replacing the current page
	// [url OR null] e.g. "http://google.com";
	expiryUrl: null, 
	
	// The speed of sliding numbers in the countdown
	countdownSpeed: 800, // In ms. Don't set more than 950ms!
	
	// The type of animation of numbers in the countdown
	countdownAnimType: 'easeInOutCirc',
	
	
	/* # -- Slider Settings
	================================================== */
	
	// The list names of photos from folder "/img/slider/"
	// ['NAME OF BACKGROUND', 'NAME OF BACKGROUND', ...]
	photos: ['example.jpg'],
	
	// The speed of changing photos in the slider
	slideSpeed: 5000,
	
	
	/* # -- Other Settings
	================================================== */
	debugMod: false // Show more information in browser's console 
}