// Edit to suit your needs.
var ADAPT_CONFIG = {
  // Where is your CSS?
  path: templateDir + '/css/',

  // false = Only run once, when page first loads.
  // true = Change on window resize and page tilt.
  dynamic: true,

  // Optional callback... myCallback(i, width)
  //callback: myCallback,

  // First range entry is the minimum.
  // Last range entry is the maximum.
  // Separate ranges by "to" keyword.
  range: [
    '0px    to 760px  = mobile.css',
    '760px  to 1100px  = 980.css',
    '1100px  to 1280px = 1024.css',
    '1280px to 1600px = 1024.css',
    '1600px to 1920px = 1920.css',
    '1940px to 2540px = 1920.css',
    '2540px           = 2540.css'
  ]
};
