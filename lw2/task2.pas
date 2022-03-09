PROGRAM SarahRevere(INPUT, OUTPUT);
USES DOS;
VAR
  Str: String;
BEGIN
  WRITELN('HTTP:/1.1 200 OK');
  WRITELN('Content-Type: text/plain');
  WRITELN;
  Str := GetEnv('QUERY_STRING');
  IF Str = 'Lanterns=1'
  THEN
    WRITELN('The British are coming by land')
  ELSE
    IF Str = 'Lanterns=2'
    THEN
      WRITELN('The British are coming by sea')
    ELSE
      WRITELN('Sarah didn"t say')
END.
