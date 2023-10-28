<?php
    $version = '2.6.1'; // the $ projectnumber variable is automatically replaced by doxygen with the version number
    $pagetitle = 'Joystick.hpp Source File'; // the $ title variable is automatically replaced by doxygen with the page title
    include('../header.php');
?>
<!-- Generated by Doxygen 1.9.8 -->
<script type="text/javascript">
/* @license magnet:?xt=urn:btih:d3d9a9a6595521f9666a5e94cc830dab83b65699&amp;dn=expat.txt MIT */
var searchBox = new SearchBox("searchBox", "search/",'.php');
/* @license-end */
</script>
  <div id="navrow1" class="tabs">
    <ul class="tablist">
      <li><a href="index.php"><span>Main&#160;Page</span></a></li>
      <li><a href="pages.php"><span>Related&#160;Pages</span></a></li>
      <li><a href="topics.php"><span>Topics</span></a></li>
      <li><a href="namespaces.php"><span>Namespaces</span></a></li>
      <li><a href="annotated.php"><span>Classes</span></a></li>
      <li class="current"><a href="files.php"><span>Files</span></a></li>
      <li>
        <div id="MSearchBox" class="MSearchBoxInactive">
        <span class="left">
          <span id="MSearchSelect"                onmouseover="return searchBox.OnSearchSelectShow()"                onmouseout="return searchBox.OnSearchSelectHide()">&#160;</span>
          <input type="text" id="MSearchField" value="" placeholder="Search" accesskey="S"
               onfocus="searchBox.OnSearchFieldFocus(true)" 
               onblur="searchBox.OnSearchFieldFocus(false)" 
               onkeyup="searchBox.OnSearchFieldChange(event)"/>
          </span><span class="right">
            <a id="MSearchClose" href="javascript:searchBox.CloseResultsWindow()"><img id="MSearchCloseImg" border="0" src="search/close.svg" alt=""/></a>
          </span>
        </div>
      </li>
    </ul>
  </div>
  <div id="navrow2" class="tabs2">
    <ul class="tablist">
      <li><a href="files.php"><span>File&#160;List</span></a></li>
      <li><a href="globals.php"><span>File&#160;Members</span></a></li>
    </ul>
  </div>
<script type="text/javascript">
/* @license magnet:?xt=urn:btih:d3d9a9a6595521f9666a5e94cc830dab83b65699&amp;dn=expat.txt MIT */
$(document).ready(function() { init_codefold(0); });
/* @license-end */
</script>
<!-- window showing the filter options -->
<div id="MSearchSelectWindow"
     onmouseover="return searchBox.OnSearchSelectShow()"
     onmouseout="return searchBox.OnSearchSelectHide()"
     onkeydown="return searchBox.OnSearchSelectKey(event)">
</div>

<!-- iframe showing the search results (closed by default) -->
<div id="MSearchResultsWindow">
<div id="MSearchResults">
<div class="SRPage">
<div id="SRIndex">
<div id="SRResults"></div>
<div class="SRStatus" id="Loading">Loading...</div>
<div class="SRStatus" id="Searching">Searching...</div>
<div class="SRStatus" id="NoMatches">No Matches</div>
</div>
</div>
</div>
</div>

<div id="nav-path" class="navpath">
  <ul>
<li class="navelem"><a class="el" href="dir_c9d62fd513ce19bab3d7ef8db833e3f1.php">SFML</a></li><li class="navelem"><a class="el" href="dir_66c4f0b3361ff6a900e01a4b3c9d5eb7.php">include</a></li><li class="navelem"><a class="el" href="dir_b640c2c295eeac6b731646a7ed21830e.php">SFML</a></li><li class="navelem"><a class="el" href="dir_9aeeb18f6197238fd33123535246e540.php">Window</a></li>  </ul>
</div>
</div><!-- top -->
<div class="header">
  <div class="headertitle"><div class="title">Joystick.hpp</div></div>
</div><!--header-->
<div class="contents">
<div class="fragment"><div class="line"><a id="l00001" name="l00001"></a><span class="lineno">    1</span> </div>
<div class="line"><a id="l00002" name="l00002"></a><span class="lineno">    2</span><span class="comment">//</span></div>
<div class="line"><a id="l00003" name="l00003"></a><span class="lineno">    3</span><span class="comment">// SFML - Simple and Fast Multimedia Library</span></div>
<div class="line"><a id="l00004" name="l00004"></a><span class="lineno">    4</span><span class="comment">// Copyright (C) 2007-2023 Laurent Gomila (laurent@sfml-dev.org)</span></div>
<div class="line"><a id="l00005" name="l00005"></a><span class="lineno">    5</span><span class="comment">//</span></div>
<div class="line"><a id="l00006" name="l00006"></a><span class="lineno">    6</span><span class="comment">// This software is provided &#39;as-is&#39;, without any express or implied warranty.</span></div>
<div class="line"><a id="l00007" name="l00007"></a><span class="lineno">    7</span><span class="comment">// In no event will the authors be held liable for any damages arising from the use of this software.</span></div>
<div class="line"><a id="l00008" name="l00008"></a><span class="lineno">    8</span><span class="comment">//</span></div>
<div class="line"><a id="l00009" name="l00009"></a><span class="lineno">    9</span><span class="comment">// Permission is granted to anyone to use this software for any purpose,</span></div>
<div class="line"><a id="l00010" name="l00010"></a><span class="lineno">   10</span><span class="comment">// including commercial applications, and to alter it and redistribute it freely,</span></div>
<div class="line"><a id="l00011" name="l00011"></a><span class="lineno">   11</span><span class="comment">// subject to the following restrictions:</span></div>
<div class="line"><a id="l00012" name="l00012"></a><span class="lineno">   12</span><span class="comment">//</span></div>
<div class="line"><a id="l00013" name="l00013"></a><span class="lineno">   13</span><span class="comment">// 1. The origin of this software must not be misrepresented;</span></div>
<div class="line"><a id="l00014" name="l00014"></a><span class="lineno">   14</span><span class="comment">//    you must not claim that you wrote the original software.</span></div>
<div class="line"><a id="l00015" name="l00015"></a><span class="lineno">   15</span><span class="comment">//    If you use this software in a product, an acknowledgment</span></div>
<div class="line"><a id="l00016" name="l00016"></a><span class="lineno">   16</span><span class="comment">//    in the product documentation would be appreciated but is not required.</span></div>
<div class="line"><a id="l00017" name="l00017"></a><span class="lineno">   17</span><span class="comment">//</span></div>
<div class="line"><a id="l00018" name="l00018"></a><span class="lineno">   18</span><span class="comment">// 2. Altered source versions must be plainly marked as such,</span></div>
<div class="line"><a id="l00019" name="l00019"></a><span class="lineno">   19</span><span class="comment">//    and must not be misrepresented as being the original software.</span></div>
<div class="line"><a id="l00020" name="l00020"></a><span class="lineno">   20</span><span class="comment">//</span></div>
<div class="line"><a id="l00021" name="l00021"></a><span class="lineno">   21</span><span class="comment">// 3. This notice may not be removed or altered from any source distribution.</span></div>
<div class="line"><a id="l00022" name="l00022"></a><span class="lineno">   22</span><span class="comment">//</span></div>
<div class="line"><a id="l00024" name="l00024"></a><span class="lineno">   24</span> </div>
<div class="line"><a id="l00025" name="l00025"></a><span class="lineno">   25</span><span class="preprocessor">#ifndef SFML_JOYSTICK_HPP</span></div>
<div class="line"><a id="l00026" name="l00026"></a><span class="lineno">   26</span><span class="preprocessor">#define SFML_JOYSTICK_HPP</span></div>
<div class="line"><a id="l00027" name="l00027"></a><span class="lineno">   27</span> </div>
<div class="line"><a id="l00029" name="l00029"></a><span class="lineno">   29</span><span class="comment">// Headers</span></div>
<div class="line"><a id="l00031" name="l00031"></a><span class="lineno">   31</span><span class="preprocessor">#include &lt;SFML/Window/Export.hpp&gt;</span></div>
<div class="line"><a id="l00032" name="l00032"></a><span class="lineno">   32</span><span class="preprocessor">#include &lt;SFML/System/String.hpp&gt;</span></div>
<div class="line"><a id="l00033" name="l00033"></a><span class="lineno">   33</span> </div>
<div class="line"><a id="l00034" name="l00034"></a><span class="lineno">   34</span> </div>
<div class="line"><a id="l00035" name="l00035"></a><span class="lineno">   35</span><span class="keyword">namespace </span>sf</div>
<div class="line"><a id="l00036" name="l00036"></a><span class="lineno">   36</span>{</div>
<div class="foldopen" id="foldopen00041" data-start="{" data-end="};">
<div class="line"><a id="l00041" name="l00041"></a><span class="lineno"><a class="line" href="classsf_1_1Joystick.php">   41</a></span><span class="keyword">class </span>SFML_WINDOW_API <a class="code hl_class" href="classsf_1_1Joystick.php">Joystick</a></div>
<div class="line"><a id="l00042" name="l00042"></a><span class="lineno">   42</span>{</div>
<div class="line"><a id="l00043" name="l00043"></a><span class="lineno">   43</span><span class="keyword">public</span>:</div>
<div class="line"><a id="l00044" name="l00044"></a><span class="lineno">   44</span> </div>
<div class="line"><a id="l00049" name="l00049"></a><span class="lineno">   49</span>    <span class="keyword">enum</span></div>
<div class="line"><a id="l00050" name="l00050"></a><span class="lineno">   50</span>    {</div>
<div class="line"><a id="l00051" name="l00051"></a><span class="lineno"><a class="line" href="classsf_1_1Joystick.php#aee00dd432eacd8369d279b47c3ab4cc5a6e0a2a95bc1da277610c04d80f52715e">   51</a></span>        Count       = 8,  </div>
<div class="line"><a id="l00052" name="l00052"></a><span class="lineno"><a class="line" href="classsf_1_1Joystick.php#aee00dd432eacd8369d279b47c3ab4cc5a2f1b8a0a59f2c12a4775c0e1e69e1816">   52</a></span>        ButtonCount = 32, </div>
<div class="line"><a id="l00053" name="l00053"></a><span class="lineno">   53</span>        AxisCount   = 8   </div>
<div class="line"><a id="l00054" name="l00054"></a><span class="lineno"><a class="line" href="classsf_1_1Joystick.php#aee00dd432eacd8369d279b47c3ab4cc5accf3e487c9f6ee2f384351323626a42c">   54</a></span>    };</div>
<div class="line"><a id="l00055" name="l00055"></a><span class="lineno">   55</span> </div>
<div class="foldopen" id="foldopen00060" data-start="{" data-end="};">
<div class="line"><a id="l00060" name="l00060"></a><span class="lineno"><a class="line" href="classsf_1_1Joystick.php#a48db337092c2e263774f94de6d50baa7">   60</a></span>    <span class="keyword">enum</span> <a class="code hl_enumeration" href="classsf_1_1Joystick.php#a48db337092c2e263774f94de6d50baa7">Axis</a></div>
<div class="line"><a id="l00061" name="l00061"></a><span class="lineno">   61</span>    {</div>
<div class="line"><a id="l00062" name="l00062"></a><span class="lineno"><a class="line" href="classsf_1_1Joystick.php#a48db337092c2e263774f94de6d50baa7a95dc8b9bf7b0a2157fc67891c54c401e">   62</a></span>        <a class="code hl_enumvalue" href="classsf_1_1Joystick.php#a48db337092c2e263774f94de6d50baa7a95dc8b9bf7b0a2157fc67891c54c401e">X</a>,    </div>
<div class="line"><a id="l00063" name="l00063"></a><span class="lineno"><a class="line" href="classsf_1_1Joystick.php#a48db337092c2e263774f94de6d50baa7a51ef1455f7511ad4a78ba241d66593ce">   63</a></span>        <a class="code hl_enumvalue" href="classsf_1_1Joystick.php#a48db337092c2e263774f94de6d50baa7a51ef1455f7511ad4a78ba241d66593ce">Y</a>,    </div>
<div class="line"><a id="l00064" name="l00064"></a><span class="lineno"><a class="line" href="classsf_1_1Joystick.php#a48db337092c2e263774f94de6d50baa7a7c37a1240b2dafbbfc5c1a0e23911315">   64</a></span>        <a class="code hl_enumvalue" href="classsf_1_1Joystick.php#a48db337092c2e263774f94de6d50baa7a7c37a1240b2dafbbfc5c1a0e23911315">Z</a>,    </div>
<div class="line"><a id="l00065" name="l00065"></a><span class="lineno"><a class="line" href="classsf_1_1Joystick.php#a48db337092c2e263774f94de6d50baa7aeebbcdb0828850f4d69e6a084801fab8">   65</a></span>        <a class="code hl_enumvalue" href="classsf_1_1Joystick.php#a48db337092c2e263774f94de6d50baa7aeebbcdb0828850f4d69e6a084801fab8">R</a>,    </div>
<div class="line"><a id="l00066" name="l00066"></a><span class="lineno"><a class="line" href="classsf_1_1Joystick.php#a48db337092c2e263774f94de6d50baa7a0a901f61e75292dd2f642b6e4f33a214">   66</a></span>        <a class="code hl_enumvalue" href="classsf_1_1Joystick.php#a48db337092c2e263774f94de6d50baa7a0a901f61e75292dd2f642b6e4f33a214">U</a>,    </div>
<div class="line"><a id="l00067" name="l00067"></a><span class="lineno"><a class="line" href="classsf_1_1Joystick.php#a48db337092c2e263774f94de6d50baa7aa2e2c8ffa1837e7911ee0c7d045bf8f4">   67</a></span>        <a class="code hl_enumvalue" href="classsf_1_1Joystick.php#a48db337092c2e263774f94de6d50baa7aa2e2c8ffa1837e7911ee0c7d045bf8f4">V</a>,    </div>
<div class="line"><a id="l00068" name="l00068"></a><span class="lineno"><a class="line" href="classsf_1_1Joystick.php#a48db337092c2e263774f94de6d50baa7a06420f7714e4dfd8b841885a0b5f3954">   68</a></span>        <a class="code hl_enumvalue" href="classsf_1_1Joystick.php#a48db337092c2e263774f94de6d50baa7a06420f7714e4dfd8b841885a0b5f3954">PovX</a>, </div>
<div class="line"><a id="l00069" name="l00069"></a><span class="lineno">   69</span>        PovY  </div>
<div class="line"><a id="l00070" name="l00070"></a><span class="lineno"><a class="line" href="classsf_1_1Joystick.php#a48db337092c2e263774f94de6d50baa7a0f8ffb2dcddf91b98ab910a4f8327ad9">   70</a></span>    };</div>
</div>
<div class="line"><a id="l00071" name="l00071"></a><span class="lineno">   71</span> </div>
<div class="foldopen" id="foldopen00076" data-start="{" data-end="};">
<div class="line"><a id="l00076" name="l00076"></a><span class="lineno"><a class="line" href="structsf_1_1Joystick_1_1Identification.php">   76</a></span>    <span class="keyword">struct </span>SFML_WINDOW_API <a class="code hl_struct" href="structsf_1_1Joystick_1_1Identification.php">Identification</a></div>
<div class="line"><a id="l00077" name="l00077"></a><span class="lineno">   77</span>    {</div>
<div class="line"><a id="l00078" name="l00078"></a><span class="lineno">   78</span>        <a class="code hl_struct" href="structsf_1_1Joystick_1_1Identification.php">Identification</a>();</div>
<div class="line"><a id="l00079" name="l00079"></a><span class="lineno">   79</span> </div>
<div class="line"><a id="l00080" name="l00080"></a><span class="lineno"><a class="line" href="structsf_1_1Joystick_1_1Identification.php#a135a9a3a4dc11c2b5cde51159b4d136d">   80</a></span>        <a class="code hl_class" href="classsf_1_1String.php">String</a>       <a class="code hl_variable" href="structsf_1_1Joystick_1_1Identification.php#a135a9a3a4dc11c2b5cde51159b4d136d">name</a>;      </div>
<div class="line"><a id="l00081" name="l00081"></a><span class="lineno"><a class="line" href="structsf_1_1Joystick_1_1Identification.php#a827caf37a56492e3430e5ca6b15b5e9f">   81</a></span>        <span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> <a class="code hl_variable" href="structsf_1_1Joystick_1_1Identification.php#a827caf37a56492e3430e5ca6b15b5e9f">vendorId</a>;  </div>
<div class="line"><a id="l00082" name="l00082"></a><span class="lineno"><a class="line" href="structsf_1_1Joystick_1_1Identification.php#a18c21317789f51f9a5f132677727ff77">   82</a></span>        <span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> <a class="code hl_variable" href="structsf_1_1Joystick_1_1Identification.php#a18c21317789f51f9a5f132677727ff77">productId</a>; </div>
<div class="line"><a id="l00083" name="l00083"></a><span class="lineno">   83</span>    };</div>
</div>
<div class="line"><a id="l00084" name="l00084"></a><span class="lineno">   84</span> </div>
<div class="line"><a id="l00093" name="l00093"></a><span class="lineno"><a class="line" href="classsf_1_1Joystick.php#ac7d4e1923e9f9420174f26703ea63d6c">   93</a></span>    <span class="keyword">static</span> <span class="keywordtype">bool</span> <a class="code hl_function" href="classsf_1_1Joystick.php#ac7d4e1923e9f9420174f26703ea63d6c">isConnected</a>(<span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> joystick);</div>
<div class="line"><a id="l00094" name="l00094"></a><span class="lineno">   94</span> </div>
<div class="line"><a id="l00105" name="l00105"></a><span class="lineno"><a class="line" href="classsf_1_1Joystick.php#a4de9f445c6582bfe9f0873f695682885">  105</a></span>    <span class="keyword">static</span> <span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> <a class="code hl_function" href="classsf_1_1Joystick.php#a4de9f445c6582bfe9f0873f695682885">getButtonCount</a>(<span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> joystick);</div>
<div class="line"><a id="l00106" name="l00106"></a><span class="lineno">  106</span> </div>
<div class="line"><a id="l00118" name="l00118"></a><span class="lineno"><a class="line" href="classsf_1_1Joystick.php#a268e8f2a11ae6af4a47c727cb4ab4d95">  118</a></span>    <span class="keyword">static</span> <span class="keywordtype">bool</span> <a class="code hl_function" href="classsf_1_1Joystick.php#a268e8f2a11ae6af4a47c727cb4ab4d95">hasAxis</a>(<span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> joystick, <a class="code hl_enumeration" href="classsf_1_1Joystick.php#a48db337092c2e263774f94de6d50baa7">Axis</a> axis);</div>
<div class="line"><a id="l00119" name="l00119"></a><span class="lineno">  119</span> </div>
<div class="line"><a id="l00131" name="l00131"></a><span class="lineno"><a class="line" href="classsf_1_1Joystick.php#ae0d97a4b84268cbe6a7078e1b2717835">  131</a></span>    <span class="keyword">static</span> <span class="keywordtype">bool</span> <a class="code hl_function" href="classsf_1_1Joystick.php#ae0d97a4b84268cbe6a7078e1b2717835">isButtonPressed</a>(<span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> joystick, <span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> button);</div>
<div class="line"><a id="l00132" name="l00132"></a><span class="lineno">  132</span> </div>
<div class="line"><a id="l00144" name="l00144"></a><span class="lineno"><a class="line" href="classsf_1_1Joystick.php#aea4930193331df1851b709f3060ba58b">  144</a></span>    <span class="keyword">static</span> <span class="keywordtype">float</span> <a class="code hl_function" href="classsf_1_1Joystick.php#aea4930193331df1851b709f3060ba58b">getAxisPosition</a>(<span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> joystick, <a class="code hl_enumeration" href="classsf_1_1Joystick.php#a48db337092c2e263774f94de6d50baa7">Axis</a> axis);</div>
<div class="line"><a id="l00145" name="l00145"></a><span class="lineno">  145</span> </div>
<div class="line"><a id="l00154" name="l00154"></a><span class="lineno"><a class="line" href="classsf_1_1Joystick.php#aa917c9435330e6e0368d3893672d1b74">  154</a></span>    <span class="keyword">static</span> <a class="code hl_struct" href="structsf_1_1Joystick_1_1Identification.php">Identification</a> <a class="code hl_function" href="classsf_1_1Joystick.php#aa917c9435330e6e0368d3893672d1b74">getIdentification</a>(<span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> joystick);</div>
<div class="line"><a id="l00155" name="l00155"></a><span class="lineno">  155</span> </div>
<div class="line"><a id="l00165" name="l00165"></a><span class="lineno"><a class="line" href="classsf_1_1Joystick.php#ab85fa9175b4edd3e5a07ee3cde0b0f48">  165</a></span>    <span class="keyword">static</span> <span class="keywordtype">void</span> <a class="code hl_function" href="classsf_1_1Joystick.php#ab85fa9175b4edd3e5a07ee3cde0b0f48">update</a>();</div>
<div class="line"><a id="l00166" name="l00166"></a><span class="lineno">  166</span>};</div>
</div>
<div class="line"><a id="l00167" name="l00167"></a><span class="lineno">  167</span> </div>
<div class="line"><a id="l00168" name="l00168"></a><span class="lineno">  168</span>} <span class="comment">// namespace sf</span></div>
<div class="line"><a id="l00169" name="l00169"></a><span class="lineno">  169</span> </div>
<div class="line"><a id="l00170" name="l00170"></a><span class="lineno">  170</span> </div>
<div class="line"><a id="l00171" name="l00171"></a><span class="lineno">  171</span><span class="preprocessor">#endif </span><span class="comment">// SFML_JOYSTICK_HPP</span></div>
<div class="line"><a id="l00172" name="l00172"></a><span class="lineno">  172</span> </div>
<div class="line"><a id="l00173" name="l00173"></a><span class="lineno">  173</span> </div>
<div class="ttc" id="aclasssf_1_1Joystick_php"><div class="ttname"><a href="classsf_1_1Joystick.php">sf::Joystick</a></div><div class="ttdoc">Give access to the real-time state of the joysticks.</div><div class="ttdef"><b>Definition</b> <a href="Joystick_8hpp_source.php#l00041">Joystick.hpp:42</a></div></div>
<div class="ttc" id="aclasssf_1_1Joystick_php_a268e8f2a11ae6af4a47c727cb4ab4d95"><div class="ttname"><a href="classsf_1_1Joystick.php#a268e8f2a11ae6af4a47c727cb4ab4d95">sf::Joystick::hasAxis</a></div><div class="ttdeci">static bool hasAxis(unsigned int joystick, Axis axis)</div><div class="ttdoc">Check if a joystick supports a given axis.</div></div>
<div class="ttc" id="aclasssf_1_1Joystick_php_a48db337092c2e263774f94de6d50baa7"><div class="ttname"><a href="classsf_1_1Joystick.php#a48db337092c2e263774f94de6d50baa7">sf::Joystick::Axis</a></div><div class="ttdeci">Axis</div><div class="ttdoc">Axes supported by SFML joysticks.</div><div class="ttdef"><b>Definition</b> <a href="Joystick_8hpp_source.php#l00060">Joystick.hpp:61</a></div></div>
<div class="ttc" id="aclasssf_1_1Joystick_php_a48db337092c2e263774f94de6d50baa7a06420f7714e4dfd8b841885a0b5f3954"><div class="ttname"><a href="classsf_1_1Joystick.php#a48db337092c2e263774f94de6d50baa7a06420f7714e4dfd8b841885a0b5f3954">sf::Joystick::PovX</a></div><div class="ttdeci">@ PovX</div><div class="ttdoc">The X axis of the point-of-view hat.</div><div class="ttdef"><b>Definition</b> <a href="Joystick_8hpp_source.php#l00068">Joystick.hpp:68</a></div></div>
<div class="ttc" id="aclasssf_1_1Joystick_php_a48db337092c2e263774f94de6d50baa7a0a901f61e75292dd2f642b6e4f33a214"><div class="ttname"><a href="classsf_1_1Joystick.php#a48db337092c2e263774f94de6d50baa7a0a901f61e75292dd2f642b6e4f33a214">sf::Joystick::U</a></div><div class="ttdeci">@ U</div><div class="ttdoc">The U axis.</div><div class="ttdef"><b>Definition</b> <a href="Joystick_8hpp_source.php#l00066">Joystick.hpp:66</a></div></div>
<div class="ttc" id="aclasssf_1_1Joystick_php_a48db337092c2e263774f94de6d50baa7a51ef1455f7511ad4a78ba241d66593ce"><div class="ttname"><a href="classsf_1_1Joystick.php#a48db337092c2e263774f94de6d50baa7a51ef1455f7511ad4a78ba241d66593ce">sf::Joystick::Y</a></div><div class="ttdeci">@ Y</div><div class="ttdoc">The Y axis.</div><div class="ttdef"><b>Definition</b> <a href="Joystick_8hpp_source.php#l00063">Joystick.hpp:63</a></div></div>
<div class="ttc" id="aclasssf_1_1Joystick_php_a48db337092c2e263774f94de6d50baa7a7c37a1240b2dafbbfc5c1a0e23911315"><div class="ttname"><a href="classsf_1_1Joystick.php#a48db337092c2e263774f94de6d50baa7a7c37a1240b2dafbbfc5c1a0e23911315">sf::Joystick::Z</a></div><div class="ttdeci">@ Z</div><div class="ttdoc">The Z axis.</div><div class="ttdef"><b>Definition</b> <a href="Joystick_8hpp_source.php#l00064">Joystick.hpp:64</a></div></div>
<div class="ttc" id="aclasssf_1_1Joystick_php_a48db337092c2e263774f94de6d50baa7a95dc8b9bf7b0a2157fc67891c54c401e"><div class="ttname"><a href="classsf_1_1Joystick.php#a48db337092c2e263774f94de6d50baa7a95dc8b9bf7b0a2157fc67891c54c401e">sf::Joystick::X</a></div><div class="ttdeci">@ X</div><div class="ttdoc">The X axis.</div><div class="ttdef"><b>Definition</b> <a href="Joystick_8hpp_source.php#l00062">Joystick.hpp:62</a></div></div>
<div class="ttc" id="aclasssf_1_1Joystick_php_a48db337092c2e263774f94de6d50baa7aa2e2c8ffa1837e7911ee0c7d045bf8f4"><div class="ttname"><a href="classsf_1_1Joystick.php#a48db337092c2e263774f94de6d50baa7aa2e2c8ffa1837e7911ee0c7d045bf8f4">sf::Joystick::V</a></div><div class="ttdeci">@ V</div><div class="ttdoc">The V axis.</div><div class="ttdef"><b>Definition</b> <a href="Joystick_8hpp_source.php#l00067">Joystick.hpp:67</a></div></div>
<div class="ttc" id="aclasssf_1_1Joystick_php_a48db337092c2e263774f94de6d50baa7aeebbcdb0828850f4d69e6a084801fab8"><div class="ttname"><a href="classsf_1_1Joystick.php#a48db337092c2e263774f94de6d50baa7aeebbcdb0828850f4d69e6a084801fab8">sf::Joystick::R</a></div><div class="ttdeci">@ R</div><div class="ttdoc">The R axis.</div><div class="ttdef"><b>Definition</b> <a href="Joystick_8hpp_source.php#l00065">Joystick.hpp:65</a></div></div>
<div class="ttc" id="aclasssf_1_1Joystick_php_a4de9f445c6582bfe9f0873f695682885"><div class="ttname"><a href="classsf_1_1Joystick.php#a4de9f445c6582bfe9f0873f695682885">sf::Joystick::getButtonCount</a></div><div class="ttdeci">static unsigned int getButtonCount(unsigned int joystick)</div><div class="ttdoc">Return the number of buttons supported by a joystick.</div></div>
<div class="ttc" id="aclasssf_1_1Joystick_php_aa917c9435330e6e0368d3893672d1b74"><div class="ttname"><a href="classsf_1_1Joystick.php#aa917c9435330e6e0368d3893672d1b74">sf::Joystick::getIdentification</a></div><div class="ttdeci">static Identification getIdentification(unsigned int joystick)</div><div class="ttdoc">Get the joystick information.</div></div>
<div class="ttc" id="aclasssf_1_1Joystick_php_ab85fa9175b4edd3e5a07ee3cde0b0f48"><div class="ttname"><a href="classsf_1_1Joystick.php#ab85fa9175b4edd3e5a07ee3cde0b0f48">sf::Joystick::update</a></div><div class="ttdeci">static void update()</div><div class="ttdoc">Update the states of all joysticks.</div></div>
<div class="ttc" id="aclasssf_1_1Joystick_php_ac7d4e1923e9f9420174f26703ea63d6c"><div class="ttname"><a href="classsf_1_1Joystick.php#ac7d4e1923e9f9420174f26703ea63d6c">sf::Joystick::isConnected</a></div><div class="ttdeci">static bool isConnected(unsigned int joystick)</div><div class="ttdoc">Check if a joystick is connected.</div></div>
<div class="ttc" id="aclasssf_1_1Joystick_php_ae0d97a4b84268cbe6a7078e1b2717835"><div class="ttname"><a href="classsf_1_1Joystick.php#ae0d97a4b84268cbe6a7078e1b2717835">sf::Joystick::isButtonPressed</a></div><div class="ttdeci">static bool isButtonPressed(unsigned int joystick, unsigned int button)</div><div class="ttdoc">Check if a joystick button is pressed.</div></div>
<div class="ttc" id="aclasssf_1_1Joystick_php_aea4930193331df1851b709f3060ba58b"><div class="ttname"><a href="classsf_1_1Joystick.php#aea4930193331df1851b709f3060ba58b">sf::Joystick::getAxisPosition</a></div><div class="ttdeci">static float getAxisPosition(unsigned int joystick, Axis axis)</div><div class="ttdoc">Get the current position of a joystick axis.</div></div>
<div class="ttc" id="aclasssf_1_1String_php"><div class="ttname"><a href="classsf_1_1String.php">sf::String</a></div><div class="ttdoc">Utility string class that automatically handles conversions between types and encodings.</div><div class="ttdef"><b>Definition</b> <a href="String_8hpp_source.php#l00045">String.hpp:46</a></div></div>
<div class="ttc" id="astructsf_1_1Joystick_1_1Identification_php"><div class="ttname"><a href="structsf_1_1Joystick_1_1Identification.php">sf::Joystick::Identification</a></div><div class="ttdoc">Structure holding a joystick's identification.</div><div class="ttdef"><b>Definition</b> <a href="Joystick_8hpp_source.php#l00076">Joystick.hpp:77</a></div></div>
<div class="ttc" id="astructsf_1_1Joystick_1_1Identification_php_a135a9a3a4dc11c2b5cde51159b4d136d"><div class="ttname"><a href="structsf_1_1Joystick_1_1Identification.php#a135a9a3a4dc11c2b5cde51159b4d136d">sf::Joystick::Identification::name</a></div><div class="ttdeci">String name</div><div class="ttdoc">Name of the joystick.</div><div class="ttdef"><b>Definition</b> <a href="Joystick_8hpp_source.php#l00080">Joystick.hpp:80</a></div></div>
<div class="ttc" id="astructsf_1_1Joystick_1_1Identification_php_a18c21317789f51f9a5f132677727ff77"><div class="ttname"><a href="structsf_1_1Joystick_1_1Identification.php#a18c21317789f51f9a5f132677727ff77">sf::Joystick::Identification::productId</a></div><div class="ttdeci">unsigned int productId</div><div class="ttdoc">Product identifier.</div><div class="ttdef"><b>Definition</b> <a href="Joystick_8hpp_source.php#l00082">Joystick.hpp:82</a></div></div>
<div class="ttc" id="astructsf_1_1Joystick_1_1Identification_php_a827caf37a56492e3430e5ca6b15b5e9f"><div class="ttname"><a href="structsf_1_1Joystick_1_1Identification.php#a827caf37a56492e3430e5ca6b15b5e9f">sf::Joystick::Identification::vendorId</a></div><div class="ttdeci">unsigned int vendorId</div><div class="ttdoc">Manufacturer identifier.</div><div class="ttdef"><b>Definition</b> <a href="Joystick_8hpp_source.php#l00081">Joystick.hpp:81</a></div></div>
</div><!-- fragment --></div><!-- contents -->
<?php
    require("../footer.php");
?>
