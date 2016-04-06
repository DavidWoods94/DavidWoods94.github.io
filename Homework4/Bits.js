var reportbyte = function (bits, bytes) {
    "use strict";
    document.getElementById("result").innerHTML =
        bits + " bit(s) = " + bytes + " byte(s)";
};

var reportbit = function (bytes, bits) {
    "use strict";
    document.getElementById("result").innerHTML =
        bytes + " byte(s) = " + bits + " bit(s)";
};

var reportbitk = function (bytes, bits) {
    "use strict";
    document.getElementById("result").innerHTML =
        bytes + " kilobyte(s) = " + bits + " bit(s)";
};

var reportkilobyte = function (bits, bytes) {
    "use strict";
    document.getElementById("result").innerHTML =
        bits + " byte(s) = " + bytes + " kilobyte(s)";
};

var reportkilobyteb = function (bits, bytes) {
    "use strict";
    document.getElementById("result").innerHTML =
        bits + " bit(s) = " + bytes + " kilobyte(s)";
};

var reportbytek = function (bits, bytes) {
    "use strict";
    document.getElementById("result").innerHTML =
        bits + " kilobyte(s) = " + bytes + " byte(s)";
};

document.getElementById("bits_to_bytes").onclick = function () {
    "use strict";
    var bit = document.getElementById("bit").value;
    reportbyte(bit, bit * 0.125);
};

document.getElementById("bits_to_kilobytes").onclick = function () {
    "use strict";
    var bit = document.getElementById("bit").value;
    reportkilobyteb(bit, bit * 0.000125);
};

document.getElementById("bytes_to_bits").onclick = function () {
    "use strict";
    var byte = document.getElementById("bit").value;
    reportbit(byte, byte / 0.125);
};

document.getElementById("bytes_to_kilobytes").onclick = function () {
    "use strict";
    var byte = document.getElementById("bit").value;
    reportkilobyte(byte, byte / 1000);
};

document.getElementById("kilobytes_to_bytes").onclick = function () {
    "use strict";
    var byte = document.getElementById("bit").value;
    reportbytek(byte, byte * 1000);
};

document.getElementById("kilobytes_to_bits").onclick = function () {
    "use strict";
    var byte = document.getElementById("bit").value;
    reportbitk(byte, byte / 0.000125);
};