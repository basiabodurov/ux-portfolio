/**
 * Animated Skill Bars.js
 *
 * Helps with accessibility for keyboard only users.
 *
 * Learn more: https://github.com/Automattic/RED Starter Theme/pull/136
 */

 jQuery(document).ready(function(){
 	jQuery('.skillbar').each(function(){
 		jQuery(this).find('.skillbar-bar').animate({
 			width:jQuery(this).attr('data-percent')
 		},6000);
 	});
 });
