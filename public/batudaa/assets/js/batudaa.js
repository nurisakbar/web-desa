/*!
 *   batudaa-theme v1.1
 *   Author: Abdul Gani <http://github.com/batudaa>
 *	 URL: http://github.com/batudaa/batudaa-theme
 *   License: Open source - MIT
 *           Please visit http://opensource.org/licenses/MIT for more information
!*/$(document).ready(function(){$("form#formSearch").submit(function(){var a=$.trim($(this).find("input[name='cari']").val());return""!=a}),$("#btnSearch").click(function(){$(".navbar-form").toggleClass("visible"),$(this).toggleClass("visible")}),$(".fancybox").fancybox()});