PROGRAM PrintHelloDear(INPUT, OUTPUT);
USES DOS;
VAR
  Str: STRING;
  Num: INTEGER;
BEGIN {PrintHelloDear}
  WRITELN('Content-Type: text/plain');
  WRITELN;
  Str := GetEnv('QUERY_STRING');
  IF Str = ''
  THEN
    WRITELN('Hello Anonymous!')
  ELSE
    BEGIN
      IF POS('Name=', Str) = 1
      THEN
        BEGIN
          IF POS('&', Str) <> 0
          THEN
            Num := POS('&', Str) - 6
          ELSE
            Num := 255;
          WRITELN('Hello dear, ', COPY(Str, 6, Num), '!')
        END
      ELSE
        WRITELN('Hello Anonymous!')
    END;
END.
