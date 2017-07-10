<svg version="1.1" width="320" height="320" viewBox="0 0 320 320" fill="none" stroke="#000" stroke-linecap="round"
     xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
  <defs>
    <path id="r1">
      <animate id="p1" attributeName="d" values="m160,160l0,0 0,0;m130,110l30,-17 30,17;m130,60l30,-17 30,17;m160,20l0,0 0,0" dur="6s" repeatCount="indefinite"/>
      <animate attributeName="stroke-width" values="0;4;4;4;0" dur="6s" repeatCount="indefinite" begin="p1.begin"/>
    </path>
    <path id="r2">
      <animate attributeName="d" values="m160,160l0,0 0,0;m130,110l30,-17 30,17;m130,60l30,-17 30,17;m160,20l0,0 0,0" dur="6s" repeatCount="indefinite" begin="p1.begin+1s"/>
      <animate attributeName="stroke-width" values="0;4;4;4;0" dur="6s" repeatCount="indefinite" begin="p1.begin+1s"/>
    </path>
    <path id="r3">
      <animate attributeName="d" values="m160,160l0,0 0,0;m130,110l30,-17 30,17;m130,60l30,-17 30,17;m160,20l0,0 0,0" dur="6s" repeatCount="indefinite" begin="p1.begin+2s"/>
      <animate attributeName="stroke-width" values="0;4;4;4;0" dur="6s" repeatCount="indefinite" begin="p1.begin+2s"/>
    </path>
    <path id="r4">
      <animate id="p1" attributeName="d" values="m160,160l0,0 0,0;m130,110l30,-17 30,17;m130,60l30,-17 30,17;m160,20l0,0 0,0" dur="6s" repeatCount="indefinite" begin="p1.begin+3s"/>
      <animate attributeName="stroke-width" values="0;4;4;4;0" dur="6s" repeatCount="indefinite" begin="p1.begin+3s"/>
    </path>
    <path id="r5">
      <animate attributeName="d" values="m160,160l0,0 0,0;m130,110l30,-17 30,17;m130,60l30,-17 30,17;m160,20l0,0 0,0" dur="6s" repeatCount="indefinite" begin="p1.begin+4s"/>
      <animate attributeName="stroke-width" values="0;4;4;4;0" dur="6s" repeatCount="indefinite" begin="p1.begin+4s"/>
    </path>
    <path id="r6">
      <animate attributeName="d" values="m160,160l0,0 0,0;m130,110l30,-17 30,17;m130,60l30,-17 30,17;m160,20l0,0 0,0" dur="6s" repeatCount="indefinite" begin="p1.begin+5s"/>
      <animate attributeName="stroke-width" values="0;4;4;4;0" dur="6s" repeatCount="indefinite" begin="p1.begin+5s"/>
    </path>
  </defs>
  <use xlink:href="#r1"/>
  <use xlink:href="#r1" transform="rotate(60 160 160)"/>
  <use xlink:href="#r1" transform="rotate(120 160 160)"/>
  <use xlink:href="#r1" transform="rotate(180 160 160)"/>
  <use xlink:href="#r1" transform="rotate(240 160 160)"/>
  <use xlink:href="#r1" transform="rotate(300 160 160)"/>
  <use xlink:href="#r2" transform="rotate(30 160 160)"/>
  <use xlink:href="#r2" transform="rotate(90 160 160)"/>
  <use xlink:href="#r2" transform="rotate(150 160 160)"/>
  <use xlink:href="#r2" transform="rotate(210 160 160)"/>
  <use xlink:href="#r2" transform="rotate(270 160 160)"/>
  <use xlink:href="#r2" transform="rotate(330 160 160)"/>
  <use xlink:href="#r3"/>
  <use xlink:href="#r3" transform="rotate(60 160 160)"/>
  <use xlink:href="#r3" transform="rotate(120 160 160)"/>
  <use xlink:href="#r3" transform="rotate(180 160 160)"/>
  <use xlink:href="#r3" transform="rotate(240 160 160)"/>
  <use xlink:href="#r3" transform="rotate(300 160 160)"/>
  <use xlink:href="#r4" transform="rotate(30 160 160)"/>
  <use xlink:href="#r4" transform="rotate(90 160 160)"/>
  <use xlink:href="#r4" transform="rotate(150 160 160)"/>
  <use xlink:href="#r4" transform="rotate(210 160 160)"/>
  <use xlink:href="#r4" transform="rotate(270 160 160)"/>
  <use xlink:href="#r4" transform="rotate(330 160 160)"/>
  <use xlink:href="#r5"/>
  <use xlink:href="#r5" transform="rotate(60 160 160)"/>
  <use xlink:href="#r5" transform="rotate(120 160 160)"/>
  <use xlink:href="#r5" transform="rotate(180 160 160)"/>
  <use xlink:href="#r5" transform="rotate(240 160 160)"/>
  <use xlink:href="#r5" transform="rotate(300 160 160)"/>
  <use xlink:href="#r6" transform="rotate(30 160 160)"/>
  <use xlink:href="#r6" transform="rotate(90 160 160)"/>
  <use xlink:href="#r6" transform="rotate(150 160 160)"/>
  <use xlink:href="#r6" transform="rotate(210 160 160)"/>
  <use xlink:href="#r6" transform="rotate(270 160 160)"/>
  <use xlink:href="#r6" transform="rotate(330 160 160)"/>
</svg>

<svg width="500" height="350">
  <circle id="orange-circle" r="30" cx="50" cy="50" fill="orange" />
  
  <animate 
           xlink:href="#orange-circle"
           attributeName="cx"
           from="50"
           to="450" 
           dur="2s"
           begin="0s"
          repeatCount="indefinite"
           repeatDur="01:30" 
           fill="freeze" 
           id="circ-anim"/>
  
  
</svg>
<style>
svg {
  border: 3px solid #eee;
  display: block;
  margin: 1em auto;
}
p {
  color: #aaa;
  text-align: center;
  margin: 2em 0;
}
</style>