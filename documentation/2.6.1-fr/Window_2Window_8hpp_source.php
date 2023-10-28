<?php
    $version = '2.6.1'; // the $ projectnumber variable is automatically replaced by doxygen with the version number
    $pagetitle = 'Window.hpp Source File'; // the $ title variable is automatically replaced by doxygen with the page title
    include('../header-fr.php');
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
  <div class="headertitle"><div class="title">Window/Window.hpp</div></div>
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
<div class="line"><a id="l00025" name="l00025"></a><span class="lineno">   25</span><span class="preprocessor">#ifndef SFML_WINDOW_HPP</span></div>
<div class="line"><a id="l00026" name="l00026"></a><span class="lineno">   26</span><span class="preprocessor">#define SFML_WINDOW_HPP</span></div>
<div class="line"><a id="l00027" name="l00027"></a><span class="lineno">   27</span> </div>
<div class="line"><a id="l00029" name="l00029"></a><span class="lineno">   29</span><span class="comment">// Headers</span></div>
<div class="line"><a id="l00031" name="l00031"></a><span class="lineno">   31</span><span class="preprocessor">#include &lt;SFML/Window/ContextSettings.hpp&gt;</span></div>
<div class="line"><a id="l00032" name="l00032"></a><span class="lineno">   32</span><span class="preprocessor">#include &lt;SFML/Window/GlResource.hpp&gt;</span></div>
<div class="line"><a id="l00033" name="l00033"></a><span class="lineno">   33</span><span class="preprocessor">#include &lt;SFML/Window/WindowBase.hpp&gt;</span></div>
<div class="line"><a id="l00034" name="l00034"></a><span class="lineno">   34</span> </div>
<div class="line"><a id="l00035" name="l00035"></a><span class="lineno">   35</span> </div>
<div class="line"><a id="l00036" name="l00036"></a><span class="lineno">   36</span><span class="keyword">namespace </span>sf</div>
<div class="line"><a id="l00037" name="l00037"></a><span class="lineno">   37</span>{</div>
<div class="line"><a id="l00038" name="l00038"></a><span class="lineno">   38</span><span class="keyword">namespace </span>priv</div>
<div class="line"><a id="l00039" name="l00039"></a><span class="lineno">   39</span>{</div>
<div class="line"><a id="l00040" name="l00040"></a><span class="lineno">   40</span>    <span class="keyword">class </span>GlContext;</div>
<div class="line"><a id="l00041" name="l00041"></a><span class="lineno">   41</span>}</div>
<div class="line"><a id="l00042" name="l00042"></a><span class="lineno">   42</span> </div>
<div class="line"><a id="l00043" name="l00043"></a><span class="lineno">   43</span><span class="keyword">class </span>Event;</div>
<div class="line"><a id="l00044" name="l00044"></a><span class="lineno">   44</span> </div>
<div class="foldopen" id="foldopen00049" data-start="{" data-end="};">
<div class="line"><a id="l00049" name="l00049"></a><span class="lineno"><a class="line" href="classsf_1_1Window.php">   49</a></span><span class="keyword">class </span>SFML_WINDOW_API <a class="code hl_class" href="classsf_1_1Window.php">Window</a> : <span class="keyword">public</span> <a class="code hl_class" href="classsf_1_1WindowBase.php">WindowBase</a>, <a class="code hl_class" href="classsf_1_1GlResource.php">GlResource</a></div>
<div class="line"><a id="l00050" name="l00050"></a><span class="lineno">   50</span>{</div>
<div class="line"><a id="l00051" name="l00051"></a><span class="lineno">   51</span><span class="keyword">public</span>:</div>
<div class="line"><a id="l00052" name="l00052"></a><span class="lineno">   52</span> </div>
<div class="line"><a id="l00060" name="l00060"></a><span class="lineno"><a class="line" href="classsf_1_1Window.php#a5359122166b4dc492c3d25caf08ccfc4">   60</a></span>    <a class="code hl_function" href="classsf_1_1Window.php#a5359122166b4dc492c3d25caf08ccfc4">Window</a>();</div>
<div class="line"><a id="l00061" name="l00061"></a><span class="lineno">   61</span> </div>
<div class="line"><a id="l00081" name="l00081"></a><span class="lineno"><a class="line" href="classsf_1_1Window.php#a1bee771baecbae6d357871929dc042a2">   81</a></span>    <a class="code hl_function" href="classsf_1_1Window.php#a1bee771baecbae6d357871929dc042a2">Window</a>(<a class="code hl_class" href="classsf_1_1VideoMode.php">VideoMode</a> mode, <span class="keyword">const</span> <a class="code hl_class" href="classsf_1_1String.php">String</a>&amp; title, Uint32 style = Style::Default, <span class="keyword">const</span> <a class="code hl_class" href="structsf_1_1ContextSettings.php">ContextSettings</a>&amp; settings = <a class="code hl_class" href="structsf_1_1ContextSettings.php">ContextSettings</a>());</div>
<div class="line"><a id="l00082" name="l00082"></a><span class="lineno">   82</span> </div>
<div class="line"><a id="l00097" name="l00097"></a><span class="lineno"><a class="line" href="classsf_1_1Window.php#a6d60912633bff9d33cf3ade4e0201de4">   97</a></span>    <span class="keyword">explicit</span> <a class="code hl_function" href="classsf_1_1Window.php#a6d60912633bff9d33cf3ade4e0201de4">Window</a>(WindowHandle handle, <span class="keyword">const</span> <a class="code hl_class" href="structsf_1_1ContextSettings.php">ContextSettings</a>&amp; settings = <a class="code hl_class" href="structsf_1_1ContextSettings.php">ContextSettings</a>());</div>
<div class="line"><a id="l00098" name="l00098"></a><span class="lineno">   98</span> </div>
<div class="line"><a id="l00105" name="l00105"></a><span class="lineno"><a class="line" href="classsf_1_1Window.php#ac30eb6ea5f5594204944d09d4bd69a97">  105</a></span>    <span class="keyword">virtual</span> <a class="code hl_function" href="classsf_1_1Window.php#ac30eb6ea5f5594204944d09d4bd69a97">~Window</a>();</div>
<div class="line"><a id="l00106" name="l00106"></a><span class="lineno">  106</span> </div>
<div class="line"><a id="l00119" name="l00119"></a><span class="lineno"><a class="line" href="classsf_1_1Window.php#ac6a58d9c26a18f0e70888d0f53e154c1">  119</a></span>    <span class="keyword">virtual</span> <span class="keywordtype">void</span> <a class="code hl_function" href="classsf_1_1Window.php#ac6a58d9c26a18f0e70888d0f53e154c1">create</a>(<a class="code hl_class" href="classsf_1_1VideoMode.php">VideoMode</a> mode, <span class="keyword">const</span> <a class="code hl_class" href="classsf_1_1String.php">String</a>&amp; title, Uint32 style = Style::Default);</div>
<div class="line"><a id="l00120" name="l00120"></a><span class="lineno">  120</span> </div>
<div class="line"><a id="l00138" name="l00138"></a><span class="lineno"><a class="line" href="classsf_1_1Window.php#a6518b989614750e90d9784f4d05ce02c">  138</a></span>    <span class="keyword">virtual</span> <span class="keywordtype">void</span> <a class="code hl_function" href="classsf_1_1Window.php#a6518b989614750e90d9784f4d05ce02c">create</a>(<a class="code hl_class" href="classsf_1_1VideoMode.php">VideoMode</a> mode, <span class="keyword">const</span> <a class="code hl_class" href="classsf_1_1String.php">String</a>&amp; title, Uint32 style, <span class="keyword">const</span> <a class="code hl_class" href="structsf_1_1ContextSettings.php">ContextSettings</a>&amp; settings);</div>
<div class="line"><a id="l00139" name="l00139"></a><span class="lineno">  139</span> </div>
<div class="line"><a id="l00150" name="l00150"></a><span class="lineno"><a class="line" href="classsf_1_1Window.php#a5ee0c5262df6cc4e1a8031ae6848437f">  150</a></span>    <span class="keyword">virtual</span> <span class="keywordtype">void</span> <a class="code hl_function" href="classsf_1_1Window.php#a5ee0c5262df6cc4e1a8031ae6848437f">create</a>(WindowHandle handle);</div>
<div class="line"><a id="l00151" name="l00151"></a><span class="lineno">  151</span> </div>
<div class="line"><a id="l00167" name="l00167"></a><span class="lineno"><a class="line" href="classsf_1_1Window.php#a064dd5dd7bb337fb9f5635f580081a1e">  167</a></span>    <span class="keyword">virtual</span> <span class="keywordtype">void</span> <a class="code hl_function" href="classsf_1_1Window.php#a064dd5dd7bb337fb9f5635f580081a1e">create</a>(WindowHandle handle, <span class="keyword">const</span> <a class="code hl_class" href="structsf_1_1ContextSettings.php">ContextSettings</a>&amp; settings);</div>
<div class="line"><a id="l00168" name="l00168"></a><span class="lineno">  168</span> </div>
<div class="line"><a id="l00179" name="l00179"></a><span class="lineno"><a class="line" href="classsf_1_1Window.php#a7355b916852af56cfe3cc00feed9f419">  179</a></span>    <span class="keyword">virtual</span> <span class="keywordtype">void</span> <a class="code hl_function" href="classsf_1_1Window.php#a7355b916852af56cfe3cc00feed9f419">close</a>();</div>
<div class="line"><a id="l00180" name="l00180"></a><span class="lineno">  180</span> </div>
<div class="line"><a id="l00192" name="l00192"></a><span class="lineno"><a class="line" href="classsf_1_1Window.php#a0605afbaceb02b098f9d731b7ab4203d">  192</a></span>    <span class="keyword">const</span> <a class="code hl_class" href="structsf_1_1ContextSettings.php">ContextSettings</a>&amp; <a class="code hl_function" href="classsf_1_1Window.php#a0605afbaceb02b098f9d731b7ab4203d">getSettings</a>() <span class="keyword">const</span>;</div>
<div class="line"><a id="l00193" name="l00193"></a><span class="lineno">  193</span> </div>
<div class="line"><a id="l00207" name="l00207"></a><span class="lineno"><a class="line" href="classsf_1_1Window.php#a59041c4556e0351048f8aff366034f61">  207</a></span>    <span class="keywordtype">void</span> <a class="code hl_function" href="classsf_1_1Window.php#a59041c4556e0351048f8aff366034f61">setVerticalSyncEnabled</a>(<span class="keywordtype">bool</span> enabled);</div>
<div class="line"><a id="l00208" name="l00208"></a><span class="lineno">  208</span> </div>
<div class="line"><a id="l00224" name="l00224"></a><span class="lineno"><a class="line" href="classsf_1_1Window.php#af4322d315baf93405bf0d5087ad5e784">  224</a></span>    <span class="keywordtype">void</span> <a class="code hl_function" href="classsf_1_1Window.php#af4322d315baf93405bf0d5087ad5e784">setFramerateLimit</a>(<span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> limit);</div>
<div class="line"><a id="l00225" name="l00225"></a><span class="lineno">  225</span> </div>
<div class="line"><a id="l00242" name="l00242"></a><span class="lineno"><a class="line" href="classsf_1_1Window.php#aaab549da64cedf74fa6f1ae7a3cc79e0">  242</a></span>    <span class="keywordtype">bool</span> <a class="code hl_function" href="classsf_1_1Window.php#aaab549da64cedf74fa6f1ae7a3cc79e0">setActive</a>(<span class="keywordtype">bool</span> active = <span class="keyword">true</span>) <span class="keyword">const</span>;</div>
<div class="line"><a id="l00243" name="l00243"></a><span class="lineno">  243</span> </div>
<div class="line"><a id="l00252" name="l00252"></a><span class="lineno"><a class="line" href="classsf_1_1Window.php#adabf839cb103ac96cfc82f781638772a">  252</a></span>    <span class="keywordtype">void</span> <a class="code hl_function" href="classsf_1_1Window.php#adabf839cb103ac96cfc82f781638772a">display</a>();</div>
<div class="line"><a id="l00253" name="l00253"></a><span class="lineno">  253</span> </div>
<div class="line"><a id="l00254" name="l00254"></a><span class="lineno">  254</span><span class="keyword">private</span>:</div>
<div class="line"><a id="l00255" name="l00255"></a><span class="lineno">  255</span> </div>
<div class="line"><a id="l00268" name="l00268"></a><span class="lineno">  268</span>    <span class="keywordtype">bool</span> filterEvent(<span class="keyword">const</span> <a class="code hl_class" href="classsf_1_1Event.php">Event</a>&amp; event);</div>
<div class="line"><a id="l00269" name="l00269"></a><span class="lineno">  269</span> </div>
<div class="line"><a id="l00274" name="l00274"></a><span class="lineno">  274</span>    <span class="keywordtype">void</span> initialize();</div>
<div class="line"><a id="l00275" name="l00275"></a><span class="lineno">  275</span> </div>
<div class="line"><a id="l00277" name="l00277"></a><span class="lineno">  277</span>    <span class="comment">// Member data</span></div>
<div class="line"><a id="l00279" name="l00279"></a><span class="lineno">  279</span>    priv::GlContext*  m_context;        </div>
<div class="line"><a id="l00280" name="l00280"></a><span class="lineno">  280</span>    <a class="code hl_class" href="classsf_1_1Clock.php">Clock</a>             m_clock;          </div>
<div class="line"><a id="l00281" name="l00281"></a><span class="lineno">  281</span>    <a class="code hl_class" href="classsf_1_1Time.php">Time</a>              m_frameTimeLimit; </div>
<div class="line"><a id="l00282" name="l00282"></a><span class="lineno">  282</span>};</div>
</div>
<div class="line"><a id="l00283" name="l00283"></a><span class="lineno">  283</span> </div>
<div class="line"><a id="l00284" name="l00284"></a><span class="lineno">  284</span>} <span class="comment">// namespace sf</span></div>
<div class="line"><a id="l00285" name="l00285"></a><span class="lineno">  285</span> </div>
<div class="line"><a id="l00286" name="l00286"></a><span class="lineno">  286</span> </div>
<div class="line"><a id="l00287" name="l00287"></a><span class="lineno">  287</span><span class="preprocessor">#endif </span><span class="comment">// SFML_WINDOW_HPP</span></div>
<div class="line"><a id="l00288" name="l00288"></a><span class="lineno">  288</span> </div>
<div class="line"><a id="l00289" name="l00289"></a><span class="lineno">  289</span> </div>
<div class="ttc" id="aclasssf_1_1Clock_php"><div class="ttname"><a href="classsf_1_1Clock.php">sf::Clock</a></div><div class="ttdoc">Utility class that measures the elapsed time.</div><div class="ttdef"><b>Definition</b> <a href="Clock_8hpp_source.php#l00041">Clock.hpp:42</a></div></div>
<div class="ttc" id="aclasssf_1_1Event_php"><div class="ttname"><a href="classsf_1_1Event.php">sf::Event</a></div><div class="ttdoc">Defines a system event and its parameters.</div><div class="ttdef"><b>Definition</b> <a href="Event_8hpp_source.php#l00044">Event.hpp:45</a></div></div>
<div class="ttc" id="aclasssf_1_1GlResource_php"><div class="ttname"><a href="classsf_1_1GlResource.php">sf::GlResource</a></div><div class="ttdoc">Base class for classes that require an OpenGL context.</div><div class="ttdef"><b>Definition</b> <a href="GlResource_8hpp_source.php#l00046">GlResource.hpp:47</a></div></div>
<div class="ttc" id="aclasssf_1_1String_php"><div class="ttname"><a href="classsf_1_1String.php">sf::String</a></div><div class="ttdoc">Utility string class that automatically handles conversions between types and encodings.</div><div class="ttdef"><b>Definition</b> <a href="String_8hpp_source.php#l00045">String.hpp:46</a></div></div>
<div class="ttc" id="aclasssf_1_1Time_php"><div class="ttname"><a href="classsf_1_1Time.php">sf::Time</a></div><div class="ttdoc">Represents a time value.</div><div class="ttdef"><b>Definition</b> <a href="Time_8hpp_source.php#l00040">Time.hpp:41</a></div></div>
<div class="ttc" id="aclasssf_1_1VideoMode_php"><div class="ttname"><a href="classsf_1_1VideoMode.php">sf::VideoMode</a></div><div class="ttdoc">VideoMode defines a video mode (width, height, bpp)</div><div class="ttdef"><b>Definition</b> <a href="VideoMode_8hpp_source.php#l00041">VideoMode.hpp:42</a></div></div>
<div class="ttc" id="aclasssf_1_1WindowBase_php"><div class="ttname"><a href="classsf_1_1WindowBase.php">sf::WindowBase</a></div><div class="ttdoc">Window that serves as a base for other windows.</div><div class="ttdef"><b>Definition</b> <a href="WindowBase_8hpp_source.php#l00056">WindowBase.hpp:57</a></div></div>
<div class="ttc" id="aclasssf_1_1Window_php"><div class="ttname"><a href="classsf_1_1Window.php">sf::Window</a></div><div class="ttdoc">Window that serves as a target for OpenGL rendering.</div><div class="ttdef"><b>Definition</b> <a href="Window_2Window_8hpp_source.php#l00049">Window/Window.hpp:50</a></div></div>
<div class="ttc" id="aclasssf_1_1Window_php_a0605afbaceb02b098f9d731b7ab4203d"><div class="ttname"><a href="classsf_1_1Window.php#a0605afbaceb02b098f9d731b7ab4203d">sf::Window::getSettings</a></div><div class="ttdeci">const ContextSettings &amp; getSettings() const</div><div class="ttdoc">Get the settings of the OpenGL context of the window.</div></div>
<div class="ttc" id="aclasssf_1_1Window_php_a064dd5dd7bb337fb9f5635f580081a1e"><div class="ttname"><a href="classsf_1_1Window.php#a064dd5dd7bb337fb9f5635f580081a1e">sf::Window::create</a></div><div class="ttdeci">virtual void create(WindowHandle handle, const ContextSettings &amp;settings)</div><div class="ttdoc">Create (or recreate) the window from an existing control.</div></div>
<div class="ttc" id="aclasssf_1_1Window_php_a1bee771baecbae6d357871929dc042a2"><div class="ttname"><a href="classsf_1_1Window.php#a1bee771baecbae6d357871929dc042a2">sf::Window::Window</a></div><div class="ttdeci">Window(VideoMode mode, const String &amp;title, Uint32 style=Style::Default, const ContextSettings &amp;settings=ContextSettings())</div><div class="ttdoc">Construct a new window.</div></div>
<div class="ttc" id="aclasssf_1_1Window_php_a5359122166b4dc492c3d25caf08ccfc4"><div class="ttname"><a href="classsf_1_1Window.php#a5359122166b4dc492c3d25caf08ccfc4">sf::Window::Window</a></div><div class="ttdeci">Window()</div><div class="ttdoc">Default constructor.</div></div>
<div class="ttc" id="aclasssf_1_1Window_php_a59041c4556e0351048f8aff366034f61"><div class="ttname"><a href="classsf_1_1Window.php#a59041c4556e0351048f8aff366034f61">sf::Window::setVerticalSyncEnabled</a></div><div class="ttdeci">void setVerticalSyncEnabled(bool enabled)</div><div class="ttdoc">Enable or disable vertical synchronization.</div></div>
<div class="ttc" id="aclasssf_1_1Window_php_a5ee0c5262df6cc4e1a8031ae6848437f"><div class="ttname"><a href="classsf_1_1Window.php#a5ee0c5262df6cc4e1a8031ae6848437f">sf::Window::create</a></div><div class="ttdeci">virtual void create(WindowHandle handle)</div><div class="ttdoc">Create (or recreate) the window from an existing control.</div></div>
<div class="ttc" id="aclasssf_1_1Window_php_a6518b989614750e90d9784f4d05ce02c"><div class="ttname"><a href="classsf_1_1Window.php#a6518b989614750e90d9784f4d05ce02c">sf::Window::create</a></div><div class="ttdeci">virtual void create(VideoMode mode, const String &amp;title, Uint32 style, const ContextSettings &amp;settings)</div><div class="ttdoc">Create (or recreate) the window.</div></div>
<div class="ttc" id="aclasssf_1_1Window_php_a6d60912633bff9d33cf3ade4e0201de4"><div class="ttname"><a href="classsf_1_1Window.php#a6d60912633bff9d33cf3ade4e0201de4">sf::Window::Window</a></div><div class="ttdeci">Window(WindowHandle handle, const ContextSettings &amp;settings=ContextSettings())</div><div class="ttdoc">Construct the window from an existing control.</div></div>
<div class="ttc" id="aclasssf_1_1Window_php_a7355b916852af56cfe3cc00feed9f419"><div class="ttname"><a href="classsf_1_1Window.php#a7355b916852af56cfe3cc00feed9f419">sf::Window::close</a></div><div class="ttdeci">virtual void close()</div><div class="ttdoc">Close the window and destroy all the attached resources.</div></div>
<div class="ttc" id="aclasssf_1_1Window_php_aaab549da64cedf74fa6f1ae7a3cc79e0"><div class="ttname"><a href="classsf_1_1Window.php#aaab549da64cedf74fa6f1ae7a3cc79e0">sf::Window::setActive</a></div><div class="ttdeci">bool setActive(bool active=true) const</div><div class="ttdoc">Activate or deactivate the window as the current target for OpenGL rendering.</div></div>
<div class="ttc" id="aclasssf_1_1Window_php_ac30eb6ea5f5594204944d09d4bd69a97"><div class="ttname"><a href="classsf_1_1Window.php#ac30eb6ea5f5594204944d09d4bd69a97">sf::Window::~Window</a></div><div class="ttdeci">virtual ~Window()</div><div class="ttdoc">Destructor.</div></div>
<div class="ttc" id="aclasssf_1_1Window_php_ac6a58d9c26a18f0e70888d0f53e154c1"><div class="ttname"><a href="classsf_1_1Window.php#ac6a58d9c26a18f0e70888d0f53e154c1">sf::Window::create</a></div><div class="ttdeci">virtual void create(VideoMode mode, const String &amp;title, Uint32 style=Style::Default)</div><div class="ttdoc">Create (or recreate) the window.</div></div>
<div class="ttc" id="aclasssf_1_1Window_php_adabf839cb103ac96cfc82f781638772a"><div class="ttname"><a href="classsf_1_1Window.php#adabf839cb103ac96cfc82f781638772a">sf::Window::display</a></div><div class="ttdeci">void display()</div><div class="ttdoc">Display on screen what has been rendered to the window so far.</div></div>
<div class="ttc" id="aclasssf_1_1Window_php_af4322d315baf93405bf0d5087ad5e784"><div class="ttname"><a href="classsf_1_1Window.php#af4322d315baf93405bf0d5087ad5e784">sf::Window::setFramerateLimit</a></div><div class="ttdeci">void setFramerateLimit(unsigned int limit)</div><div class="ttdoc">Limit the framerate to a maximum fixed frequency.</div></div>
<div class="ttc" id="astructsf_1_1ContextSettings_php"><div class="ttname"><a href="structsf_1_1ContextSettings.php">sf::ContextSettings</a></div><div class="ttdoc">Structure defining the settings of the OpenGL context attached to a window.</div><div class="ttdef"><b>Definition</b> <a href="ContextSettings_8hpp_source.php#l00037">ContextSettings.hpp:38</a></div></div>
</div><!-- fragment --></div><!-- contents -->
<?php
    require("../footer-fr.php");
?>
