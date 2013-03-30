// <![CDATA[
        function getMp3URL(dharmaName,mp3No)
        {
                var link = '';
                link='http://www.mbitree.net/mp3/'+dharmaName+'/'+dharmaName+mp3No+'.mp3'; 

                PlayerOpen(dharmaName + mp3No,link)
        }

        var UniqueID = 314
        var newWinOffset = 0

		function PlayerOpen(soundfiledesc,soundfilepath) 
		{
			PlayWin = window.open('',UniqueID,'width=320,height=130,top=' + newWinOffset +',left=0,resizable=true,scrollbars=0,titlebar=0,toolbar=0,menubar=0,status=0,directories=0,personalbar=0');
			PlayWin.focus();
			var winContent = "<HTML><HEAD><TITLE>" + soundfiledesc + "</TITLE></HEAD><BODY bgcolor='#ecfdfd'>";
			winContent += "<B style='font-size:18px;font-family:Verdana,sans-serif;line-height:1.5'>" + soundfiledesc + "</B>";
			winContent += "<OBJECT id=\"VIDEO\" width=\"320\" height=\"60\" style=\"position:absolute; left:0;top:0;\" CLASSID=\"CLSID:6BF52A52-394A-11D3-B153-00C04F79FAA6\" type=\"application/x-oleobject\">"
			winContent += "<param name='URL' value="+soundfilepath+">";
			winContent += "<param name='autoStart' value='true'>";
			winContent += "<param name='enabled' value='true'>";
			winContent += "<param name='loop' value='false'>";
			winContent += "</object>";
			winContent += "<br><br>";
			winContent += "<p><a href='"+soundfilepath+"'>下載檔案</a> <SPAN style='font-size:10px'>(按右鍵另存新檔)</SPAN></p>";
			winContent += "<FORM><DIV align='center'><INPUT type='button' value='Close this window (關閉此窗)' onClick='javascript:window.close();'></DIV></FORM>";
			winContent += "</BODY></HTML>";
			PlayWin.document.write(winContent);
			PlayWin.document.close(); // "Finalizes" new window
			UniqueID = UniqueID + 1
			//newWinOffset = newWinOffset + 20 // subsequent pop-ups will be this many pixels lower.
		}

// ]]>