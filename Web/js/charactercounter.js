<!--
function textCounter(theField,theCharCounter,theLineCounter,maxChars,maxLines,maxPerLine)
{
var strTemp = "";
var strLineCounter = 140;
var strCharCounter = 140;
for (var i = 0; i < theField.value.length; i++)
{
var strChar = theField.value.substring(i, i + 1);
if (strChar == '\n')
{
strTemp += strChar;
strCharCounter = 1;
strLineCounter += 1;
}
else if (strCharCounter == maxPerLine)
{
strTemp += '\n' + strChar;
strCharCounter = 1;
strLineCounter += 1;
}
else
{
strTemp += strChar;
strCharCounter ++;
}
}
theCharCounter.value = maxChars - strTemp.length;
theLineCounter.value = maxLines - strLineCounter;
}
//-->
