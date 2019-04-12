<footer class="container-fluid text-center" style="background: #121212;padding:20px">
        <div style="font-size: 12px;line-height: 20px">
            The information displayed here comes from the Mynt blockchain. <a href="https://github.com/MSFTserver/"> <i class="fab fa-github"></i> Dev</a> / <a href="https://github.com/project-mynt/Mynt-Assets-Explorer"><i class="fab fa-github"></i> Source</a>
        </div>
        <div style="font-size: 12px;line-height: 20px">
            MYNT: MDread1Whd1dMhAgnuJj6Ke7aYbtCh6TCs - RVN: RQPxk7ngwRj5nZVhBXYc7a5LRDpDuv4zE1
        </div>
    </footer>

<script>
// Get the Sidebar
var mySidebar = document.getElementById("mySidebar");

// Get the DIV with overlay effect
var overlayBg = document.getElementById("myOverlay");

// Toggle between showing and hiding the sidebar, and add overlay effect
function w3_open() {
    if (mySidebar.style.display === 'block') {
        mySidebar.style.display = 'none';
        overlayBg.style.display = "none";
    } else {
        mySidebar.style.display = 'block';
        overlayBg.style.display = "block";
    }
}

// Close the sidebar with the close button
function w3_close() {
    mySidebar.style.display = "none";
    overlayBg.style.display = "none";
}
</script>
</body>
</html>