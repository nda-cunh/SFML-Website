<?php
    $version = '2.6.1'; // the $ projectnumber variable is automatically replaced by doxygen with the version number
    $pagetitle = 'TcpSocket.hpp Source File'; // the $ title variable is automatically replaced by doxygen with the page title
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
<li class="navelem"><a class="el" href="dir_c9d62fd513ce19bab3d7ef8db833e3f1.php">SFML</a></li><li class="navelem"><a class="el" href="dir_66c4f0b3361ff6a900e01a4b3c9d5eb7.php">include</a></li><li class="navelem"><a class="el" href="dir_b640c2c295eeac6b731646a7ed21830e.php">SFML</a></li><li class="navelem"><a class="el" href="dir_5c1116cdc74b8c7983261a15f16adc17.php">Network</a></li>  </ul>
</div>
</div><!-- top -->
<div class="header">
  <div class="headertitle"><div class="title">TcpSocket.hpp</div></div>
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
<div class="line"><a id="l00025" name="l00025"></a><span class="lineno">   25</span><span class="preprocessor">#ifndef SFML_TCPSOCKET_HPP</span></div>
<div class="line"><a id="l00026" name="l00026"></a><span class="lineno">   26</span><span class="preprocessor">#define SFML_TCPSOCKET_HPP</span></div>
<div class="line"><a id="l00027" name="l00027"></a><span class="lineno">   27</span> </div>
<div class="line"><a id="l00029" name="l00029"></a><span class="lineno">   29</span><span class="comment">// Headers</span></div>
<div class="line"><a id="l00031" name="l00031"></a><span class="lineno">   31</span><span class="preprocessor">#include &lt;SFML/Network/Export.hpp&gt;</span></div>
<div class="line"><a id="l00032" name="l00032"></a><span class="lineno">   32</span><span class="preprocessor">#include &lt;SFML/Network/Socket.hpp&gt;</span></div>
<div class="line"><a id="l00033" name="l00033"></a><span class="lineno">   33</span><span class="preprocessor">#include &lt;SFML/System/Time.hpp&gt;</span></div>
<div class="line"><a id="l00034" name="l00034"></a><span class="lineno">   34</span> </div>
<div class="line"><a id="l00035" name="l00035"></a><span class="lineno">   35</span> </div>
<div class="line"><a id="l00036" name="l00036"></a><span class="lineno">   36</span><span class="keyword">namespace </span>sf</div>
<div class="line"><a id="l00037" name="l00037"></a><span class="lineno">   37</span>{</div>
<div class="line"><a id="l00038" name="l00038"></a><span class="lineno">   38</span><span class="keyword">class </span>TcpListener;</div>
<div class="line"><a id="l00039" name="l00039"></a><span class="lineno">   39</span><span class="keyword">class </span>IpAddress;</div>
<div class="line"><a id="l00040" name="l00040"></a><span class="lineno">   40</span><span class="keyword">class </span>Packet;</div>
<div class="line"><a id="l00041" name="l00041"></a><span class="lineno">   41</span> </div>
<div class="foldopen" id="foldopen00046" data-start="{" data-end="};">
<div class="line"><a id="l00046" name="l00046"></a><span class="lineno"><a class="line" href="classsf_1_1TcpSocket.php">   46</a></span><span class="keyword">class </span>SFML_NETWORK_API <a class="code hl_class" href="classsf_1_1TcpSocket.php">TcpSocket</a> : <span class="keyword">public</span> <a class="code hl_class" href="classsf_1_1Socket.php">Socket</a></div>
<div class="line"><a id="l00047" name="l00047"></a><span class="lineno">   47</span>{</div>
<div class="line"><a id="l00048" name="l00048"></a><span class="lineno">   48</span><span class="keyword">public</span>:</div>
<div class="line"><a id="l00049" name="l00049"></a><span class="lineno">   49</span> </div>
<div class="line"><a id="l00054" name="l00054"></a><span class="lineno"><a class="line" href="classsf_1_1TcpSocket.php#a62a9bf81fd7f15fedb29fd1348483236">   54</a></span>    <a class="code hl_function" href="classsf_1_1TcpSocket.php#a62a9bf81fd7f15fedb29fd1348483236">TcpSocket</a>();</div>
<div class="line"><a id="l00055" name="l00055"></a><span class="lineno">   55</span> </div>
<div class="line"><a id="l00066" name="l00066"></a><span class="lineno"><a class="line" href="classsf_1_1TcpSocket.php#a98e45f0f49af1fd99216b9195e86d86b">   66</a></span>    <span class="keywordtype">unsigned</span> <span class="keywordtype">short</span> <a class="code hl_function" href="classsf_1_1TcpSocket.php#a98e45f0f49af1fd99216b9195e86d86b">getLocalPort</a>() <span class="keyword">const</span>;</div>
<div class="line"><a id="l00067" name="l00067"></a><span class="lineno">   67</span> </div>
<div class="line"><a id="l00079" name="l00079"></a><span class="lineno"><a class="line" href="classsf_1_1TcpSocket.php#aa8579c203b1fd21beb74d7f76444a94c">   79</a></span>    <a class="code hl_class" href="classsf_1_1IpAddress.php">IpAddress</a> <a class="code hl_function" href="classsf_1_1TcpSocket.php#aa8579c203b1fd21beb74d7f76444a94c">getRemoteAddress</a>() <span class="keyword">const</span>;</div>
<div class="line"><a id="l00080" name="l00080"></a><span class="lineno">   80</span> </div>
<div class="line"><a id="l00092" name="l00092"></a><span class="lineno"><a class="line" href="classsf_1_1TcpSocket.php#a93bced0afd4b1c60797a85725be04951">   92</a></span>    <span class="keywordtype">unsigned</span> <span class="keywordtype">short</span> <a class="code hl_function" href="classsf_1_1TcpSocket.php#a93bced0afd4b1c60797a85725be04951">getRemotePort</a>() <span class="keyword">const</span>;</div>
<div class="line"><a id="l00093" name="l00093"></a><span class="lineno">   93</span> </div>
<div class="line"><a id="l00112" name="l00112"></a><span class="lineno"><a class="line" href="classsf_1_1TcpSocket.php#a68cd42d5ab70ab54b16787f555951c40">  112</a></span>    <a class="code hl_enumeration" href="classsf_1_1Socket.php#a51bf0fd51057b98a10fbb866246176dc">Status</a> <a class="code hl_function" href="classsf_1_1TcpSocket.php#a68cd42d5ab70ab54b16787f555951c40">connect</a>(<span class="keyword">const</span> <a class="code hl_class" href="classsf_1_1IpAddress.php">IpAddress</a>&amp; remoteAddress, <span class="keywordtype">unsigned</span> <span class="keywordtype">short</span> remotePort, <a class="code hl_class" href="classsf_1_1Time.php">Time</a> timeout = Time::Zero);</div>
<div class="line"><a id="l00113" name="l00113"></a><span class="lineno">  113</span> </div>
<div class="line"><a id="l00123" name="l00123"></a><span class="lineno"><a class="line" href="classsf_1_1TcpSocket.php#ac18f518a9be3d6be5e74b9404c253c1e">  123</a></span>    <span class="keywordtype">void</span> <a class="code hl_function" href="classsf_1_1TcpSocket.php#ac18f518a9be3d6be5e74b9404c253c1e">disconnect</a>();</div>
<div class="line"><a id="l00124" name="l00124"></a><span class="lineno">  124</span> </div>
<div class="line"><a id="l00141" name="l00141"></a><span class="lineno"><a class="line" href="classsf_1_1TcpSocket.php#affce26ab3bcc4f5b9269dad79db544c0">  141</a></span>    <a class="code hl_enumeration" href="classsf_1_1Socket.php#a51bf0fd51057b98a10fbb866246176dc">Status</a> <a class="code hl_function" href="classsf_1_1TcpSocket.php#affce26ab3bcc4f5b9269dad79db544c0">send</a>(<span class="keyword">const</span> <span class="keywordtype">void</span>* data, std::size_t size);</div>
<div class="line"><a id="l00142" name="l00142"></a><span class="lineno">  142</span> </div>
<div class="line"><a id="l00157" name="l00157"></a><span class="lineno"><a class="line" href="classsf_1_1TcpSocket.php#a31f5b280126a96c6f3ad430f4cbcb54d">  157</a></span>    <a class="code hl_enumeration" href="classsf_1_1Socket.php#a51bf0fd51057b98a10fbb866246176dc">Status</a> <a class="code hl_function" href="classsf_1_1TcpSocket.php#a31f5b280126a96c6f3ad430f4cbcb54d">send</a>(<span class="keyword">const</span> <span class="keywordtype">void</span>* data, std::size_t size, std::size_t&amp; sent);</div>
<div class="line"><a id="l00158" name="l00158"></a><span class="lineno">  158</span> </div>
<div class="line"><a id="l00175" name="l00175"></a><span class="lineno"><a class="line" href="classsf_1_1TcpSocket.php#a90ce50811ea61d4f00efc62bb99ae1af">  175</a></span>    <a class="code hl_enumeration" href="classsf_1_1Socket.php#a51bf0fd51057b98a10fbb866246176dc">Status</a> <a class="code hl_function" href="classsf_1_1TcpSocket.php#a90ce50811ea61d4f00efc62bb99ae1af">receive</a>(<span class="keywordtype">void</span>* data, std::size_t size, std::size_t&amp; received);</div>
<div class="line"><a id="l00176" name="l00176"></a><span class="lineno">  176</span> </div>
<div class="line"><a id="l00193" name="l00193"></a><span class="lineno"><a class="line" href="classsf_1_1TcpSocket.php#a0f8276e2b1c75aac4a7b0a707b250f44">  193</a></span>    <a class="code hl_enumeration" href="classsf_1_1Socket.php#a51bf0fd51057b98a10fbb866246176dc">Status</a> <a class="code hl_function" href="classsf_1_1TcpSocket.php#a0f8276e2b1c75aac4a7b0a707b250f44">send</a>(<a class="code hl_class" href="classsf_1_1Packet.php">Packet</a>&amp; packet);</div>
<div class="line"><a id="l00194" name="l00194"></a><span class="lineno">  194</span> </div>
<div class="line"><a id="l00209" name="l00209"></a><span class="lineno"><a class="line" href="classsf_1_1TcpSocket.php#aa655352609bc9804f2baa020df3e7331">  209</a></span>    <a class="code hl_enumeration" href="classsf_1_1Socket.php#a51bf0fd51057b98a10fbb866246176dc">Status</a> <a class="code hl_function" href="classsf_1_1TcpSocket.php#aa655352609bc9804f2baa020df3e7331">receive</a>(<a class="code hl_class" href="classsf_1_1Packet.php">Packet</a>&amp; packet);</div>
<div class="line"><a id="l00210" name="l00210"></a><span class="lineno">  210</span> </div>
<div class="line"><a id="l00211" name="l00211"></a><span class="lineno">  211</span><span class="keyword">private</span>:</div>
<div class="line"><a id="l00212" name="l00212"></a><span class="lineno">  212</span> </div>
<div class="line"><a id="l00213" name="l00213"></a><span class="lineno">  213</span>    <span class="keyword">friend</span> <span class="keyword">class </span><a class="code hl_class" href="classsf_1_1TcpListener.php">TcpListener</a>;</div>
<div class="line"><a id="l00214" name="l00214"></a><span class="lineno">  214</span> </div>
<div class="line"><a id="l00219" name="l00219"></a><span class="lineno">  219</span>    <span class="keyword">struct </span>PendingPacket</div>
<div class="line"><a id="l00220" name="l00220"></a><span class="lineno">  220</span>    {</div>
<div class="line"><a id="l00221" name="l00221"></a><span class="lineno">  221</span>        PendingPacket();</div>
<div class="line"><a id="l00222" name="l00222"></a><span class="lineno">  222</span> </div>
<div class="line"><a id="l00223" name="l00223"></a><span class="lineno">  223</span>        Uint32            Size;         </div>
<div class="line"><a id="l00224" name="l00224"></a><span class="lineno">  224</span>        std::size_t       SizeReceived; </div>
<div class="line"><a id="l00225" name="l00225"></a><span class="lineno">  225</span>        std::vector&lt;char&gt; Data;         </div>
<div class="line"><a id="l00226" name="l00226"></a><span class="lineno">  226</span>    };</div>
<div class="line"><a id="l00227" name="l00227"></a><span class="lineno">  227</span> </div>
<div class="line"><a id="l00229" name="l00229"></a><span class="lineno">  229</span>    <span class="comment">// Member data</span></div>
<div class="line"><a id="l00231" name="l00231"></a><span class="lineno">  231</span>    PendingPacket m_pendingPacket; </div>
<div class="line"><a id="l00232" name="l00232"></a><span class="lineno">  232</span>};</div>
</div>
<div class="line"><a id="l00233" name="l00233"></a><span class="lineno">  233</span> </div>
<div class="line"><a id="l00234" name="l00234"></a><span class="lineno">  234</span>} <span class="comment">// namespace sf</span></div>
<div class="line"><a id="l00235" name="l00235"></a><span class="lineno">  235</span> </div>
<div class="line"><a id="l00236" name="l00236"></a><span class="lineno">  236</span> </div>
<div class="line"><a id="l00237" name="l00237"></a><span class="lineno">  237</span><span class="preprocessor">#endif </span><span class="comment">// SFML_TCPSOCKET_HPP</span></div>
<div class="line"><a id="l00238" name="l00238"></a><span class="lineno">  238</span> </div>
<div class="line"><a id="l00239" name="l00239"></a><span class="lineno">  239</span> </div>
<div class="ttc" id="aclasssf_1_1IpAddress_php"><div class="ttname"><a href="classsf_1_1IpAddress.php">sf::IpAddress</a></div><div class="ttdoc">Encapsulate an IPv4 network address.</div><div class="ttdef"><b>Definition</b> <a href="IpAddress_8hpp_source.php#l00044">IpAddress.hpp:45</a></div></div>
<div class="ttc" id="aclasssf_1_1Packet_php"><div class="ttname"><a href="classsf_1_1Packet.php">sf::Packet</a></div><div class="ttdoc">Utility class to build blocks of data to transfer over the network.</div><div class="ttdef"><b>Definition</b> <a href="Packet_8hpp_source.php#l00047">Packet.hpp:48</a></div></div>
<div class="ttc" id="aclasssf_1_1Socket_php"><div class="ttname"><a href="classsf_1_1Socket.php">sf::Socket</a></div><div class="ttdoc">Base class for all the socket types.</div><div class="ttdef"><b>Definition</b> <a href="Socket_8hpp_source.php#l00045">Socket.hpp:46</a></div></div>
<div class="ttc" id="aclasssf_1_1Socket_php_a51bf0fd51057b98a10fbb866246176dc"><div class="ttname"><a href="classsf_1_1Socket.php#a51bf0fd51057b98a10fbb866246176dc">sf::Socket::Status</a></div><div class="ttdeci">Status</div><div class="ttdoc">Status codes that may be returned by socket functions.</div><div class="ttdef"><b>Definition</b> <a href="Socket_8hpp_source.php#l00053">Socket.hpp:54</a></div></div>
<div class="ttc" id="aclasssf_1_1TcpListener_php"><div class="ttname"><a href="classsf_1_1TcpListener.php">sf::TcpListener</a></div><div class="ttdoc">Socket that listens to new TCP connections.</div><div class="ttdef"><b>Definition</b> <a href="TcpListener_8hpp_source.php#l00044">TcpListener.hpp:45</a></div></div>
<div class="ttc" id="aclasssf_1_1TcpSocket_php"><div class="ttname"><a href="classsf_1_1TcpSocket.php">sf::TcpSocket</a></div><div class="ttdoc">Specialized socket using the TCP protocol.</div><div class="ttdef"><b>Definition</b> <a href="TcpSocket_8hpp_source.php#l00046">TcpSocket.hpp:47</a></div></div>
<div class="ttc" id="aclasssf_1_1TcpSocket_php_a0f8276e2b1c75aac4a7b0a707b250f44"><div class="ttname"><a href="classsf_1_1TcpSocket.php#a0f8276e2b1c75aac4a7b0a707b250f44">sf::TcpSocket::send</a></div><div class="ttdeci">Status send(Packet &amp;packet)</div><div class="ttdoc">Send a formatted packet of data to the remote peer.</div></div>
<div class="ttc" id="aclasssf_1_1TcpSocket_php_a31f5b280126a96c6f3ad430f4cbcb54d"><div class="ttname"><a href="classsf_1_1TcpSocket.php#a31f5b280126a96c6f3ad430f4cbcb54d">sf::TcpSocket::send</a></div><div class="ttdeci">Status send(const void *data, std::size_t size, std::size_t &amp;sent)</div><div class="ttdoc">Send raw data to the remote peer.</div></div>
<div class="ttc" id="aclasssf_1_1TcpSocket_php_a62a9bf81fd7f15fedb29fd1348483236"><div class="ttname"><a href="classsf_1_1TcpSocket.php#a62a9bf81fd7f15fedb29fd1348483236">sf::TcpSocket::TcpSocket</a></div><div class="ttdeci">TcpSocket()</div><div class="ttdoc">Default constructor.</div></div>
<div class="ttc" id="aclasssf_1_1TcpSocket_php_a68cd42d5ab70ab54b16787f555951c40"><div class="ttname"><a href="classsf_1_1TcpSocket.php#a68cd42d5ab70ab54b16787f555951c40">sf::TcpSocket::connect</a></div><div class="ttdeci">Status connect(const IpAddress &amp;remoteAddress, unsigned short remotePort, Time timeout=Time::Zero)</div><div class="ttdoc">Connect the socket to a remote peer.</div></div>
<div class="ttc" id="aclasssf_1_1TcpSocket_php_a90ce50811ea61d4f00efc62bb99ae1af"><div class="ttname"><a href="classsf_1_1TcpSocket.php#a90ce50811ea61d4f00efc62bb99ae1af">sf::TcpSocket::receive</a></div><div class="ttdeci">Status receive(void *data, std::size_t size, std::size_t &amp;received)</div><div class="ttdoc">Receive raw data from the remote peer.</div></div>
<div class="ttc" id="aclasssf_1_1TcpSocket_php_a93bced0afd4b1c60797a85725be04951"><div class="ttname"><a href="classsf_1_1TcpSocket.php#a93bced0afd4b1c60797a85725be04951">sf::TcpSocket::getRemotePort</a></div><div class="ttdeci">unsigned short getRemotePort() const</div><div class="ttdoc">Get the port of the connected peer to which the socket is connected.</div></div>
<div class="ttc" id="aclasssf_1_1TcpSocket_php_a98e45f0f49af1fd99216b9195e86d86b"><div class="ttname"><a href="classsf_1_1TcpSocket.php#a98e45f0f49af1fd99216b9195e86d86b">sf::TcpSocket::getLocalPort</a></div><div class="ttdeci">unsigned short getLocalPort() const</div><div class="ttdoc">Get the port to which the socket is bound locally.</div></div>
<div class="ttc" id="aclasssf_1_1TcpSocket_php_aa655352609bc9804f2baa020df3e7331"><div class="ttname"><a href="classsf_1_1TcpSocket.php#aa655352609bc9804f2baa020df3e7331">sf::TcpSocket::receive</a></div><div class="ttdeci">Status receive(Packet &amp;packet)</div><div class="ttdoc">Receive a formatted packet of data from the remote peer.</div></div>
<div class="ttc" id="aclasssf_1_1TcpSocket_php_aa8579c203b1fd21beb74d7f76444a94c"><div class="ttname"><a href="classsf_1_1TcpSocket.php#aa8579c203b1fd21beb74d7f76444a94c">sf::TcpSocket::getRemoteAddress</a></div><div class="ttdeci">IpAddress getRemoteAddress() const</div><div class="ttdoc">Get the address of the connected peer.</div></div>
<div class="ttc" id="aclasssf_1_1TcpSocket_php_ac18f518a9be3d6be5e74b9404c253c1e"><div class="ttname"><a href="classsf_1_1TcpSocket.php#ac18f518a9be3d6be5e74b9404c253c1e">sf::TcpSocket::disconnect</a></div><div class="ttdeci">void disconnect()</div><div class="ttdoc">Disconnect the socket from its remote peer.</div></div>
<div class="ttc" id="aclasssf_1_1TcpSocket_php_affce26ab3bcc4f5b9269dad79db544c0"><div class="ttname"><a href="classsf_1_1TcpSocket.php#affce26ab3bcc4f5b9269dad79db544c0">sf::TcpSocket::send</a></div><div class="ttdeci">Status send(const void *data, std::size_t size)</div><div class="ttdoc">Send raw data to the remote peer.</div></div>
<div class="ttc" id="aclasssf_1_1Time_php"><div class="ttname"><a href="classsf_1_1Time.php">sf::Time</a></div><div class="ttdoc">Represents a time value.</div><div class="ttdef"><b>Definition</b> <a href="Time_8hpp_source.php#l00040">Time.hpp:41</a></div></div>
</div><!-- fragment --></div><!-- contents -->
<?php
    require("../footer.php");
?>
