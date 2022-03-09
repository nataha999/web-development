PROGRAM WorkWithQueryString(INPUT, OUTPUT);
USES
  DOS;
FUNCTION GetQueryStringParameter(Key: STRING): STRING;
VAR
  Str: STRING;
BEGIN {GetQueryStringParameter}
  Str := GetEnv('QUERY_STRING');
  IF (POS(Key + '=', Str) = 1) OR (POS('&' + Key + '=', Str) <> 0)
  THEN
    BEGIN
      Str := COPY(Str, POS(Key + '=', Str) + LENGTH(Key + '='), 255);
      IF POS('&', Str) <> 0
      THEN
        Str := COPY(Str, 1, POS('&', Str) - 1);
      GetQueryStringParameter := Str
    END
  ELSE
    GetQueryStringParameter := ''
END;{GetQueryStringParameter}

BEGIN {WorkWithQueryString}
  WRITELN('Content-Type: text/plain');
  WRITELN;
  WRITELN('First Name: ', GetQueryStringParameter('first_name'));
  WRITELN('Last Name: ', GetQueryStringParameter('last_name'));
  WRITELN('Age: ', GetQueryStringParameter('age'))
END. {WorkWithQueryString}
