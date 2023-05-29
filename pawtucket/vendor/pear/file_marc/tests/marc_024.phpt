--TEST--
marc_024: read MARC-in-JSON serialization with subfield 0
--SKIPIF--
<?php include('skipif.inc'); ?>
--FILE--
<?php
$dir = dirname(__FILE__);
require 'File/MARCJSON.php';

$json = '{"leader":"01850     2200517   4500","fields":[{"001":"0000000044"},{"003":"EMILDA"},{"008":"980120s1998    fi     j      000 0 swe"},{"020":{"ind1":" ","ind2":" ","subfields":[{"a":"9515008808"},{"c":"FIM 72:00"}]}},{"035":{"ind1":" ","ind2":" ","subfields":[{"9":"9515008808"}]}},{"040":{"ind1":" ","ind2":" ","subfields":[{"a":"NB"}]}},{"042":{"ind1":" ","ind2":" ","subfields":[{"9":"NB"},{"9":"SEE"}]}},{"084":{"ind1":" ","ind2":" ","subfields":[{"a":"Hcd,u"},{"2":"kssb\/6"}]}},{"084":{"ind1":" ","ind2":" ","subfields":[{"5":"NB"},{"a":"uHc"},{"2":"kssb"}]}},{"084":{"ind1":" ","ind2":" ","subfields":[{"5":"SEE"},{"a":"Hcf"},{"2":"kssb\/6"}]}},{"084":{"ind1":" ","ind2":" ","subfields":[{"5":"Q"},{"a":"Hcd,uf"},{"2":"kssb\/6"}]}},{"100":{"ind1":"1","ind2":" ","subfields":[{"a":"Jansson, Tove,"},{"d":"1914-2001"}]}},{"245":{"ind1":"0","ind2":"4","subfields":[{"a":"Det osynliga barnet och andra ber\u00e4ttelser \/"},{"c":"Tove Jansson"}]}},{"250":{"ind1":" ","ind2":" ","subfields":[{"a":"7. uppl."}]}},{"260":{"ind1":" ","ind2":" ","subfields":[{"a":"Helsingfors :"},{"b":"Schildt,"},{"c":"1998 ;"},{"e":"(Falun :"},{"f":"Scandbook)"}]}},{"300":{"ind1":" ","ind2":" ","subfields":[{"a":"166, [4] s. :"},{"b":"ill. ;"},{"c":"21 cm"}]}},{"440":{"ind1":" ","ind2":"0","subfields":[{"a":"Mumin-biblioteket,"},{"x":"99-0698931-9"}]}},{"500":{"ind1":" ","ind2":" ","subfields":[{"a":"Originaluppl. 1962"}]}},{"599":{"ind1":" ","ind2":" ","subfields":[{"a":"Li: S"}]}},{"740":{"ind1":"4","ind2":" ","subfields":[{"a":"Det osynliga barnet"}]}},{"775":{"ind1":"1","ind2":" ","subfields":[{"z":"951-50-0385-7"},{"w":"9515003857"},{"9":"07"}]}},{"841":{"ind1":" ","ind2":" ","subfields":[{"5":"Li"},{"a":"xa"},{"b":"0201080u    0   4000uu   |000000"},{"e":"1"}]}},{"841":{"ind1":" ","ind2":" ","subfields":[{"5":"SEE"},{"a":"xa"},{"b":"0201080u    0   4000uu   |000000"},{"e":"1"}]}},{"841":{"ind1":" ","ind2":" ","subfields":[{"5":"L"},{"a":"xa"},{"b":"0201080u    0   4000uu   |000000"},{"e":"1"}]}},{"841":{"ind1":" ","ind2":" ","subfields":[{"5":"NB"},{"a":"xa"},{"b":"0201080u    0   4000uu   |000000"},{"e":"1"}]}},{"841":{"ind1":" ","ind2":" ","subfields":[{"5":"Q"},{"a":"xa"},{"b":"0201080u    0   4000uu   |000000"},{"e":"1"}]}},{"841":{"ind1":" ","ind2":" ","subfields":[{"5":"S"},{"a":"xa"},{"b":"0201080u    0   4000uu   |000000"},{"e":"1"}]}},{"852":{"ind1":" ","ind2":" ","subfields":[{"5":"NB"},{"b":"NB"},{"c":"NB98:12"},{"h":"plikt"},{"j":"R, 980520"}]}},{"852":{"ind1":" ","ind2":" ","subfields":[{"5":"Li"},{"b":"Li"},{"c":"CNB"},{"h":"h,u"}]}},{"852":{"ind1":" ","ind2":" ","subfields":[{"5":"SEE"},{"b":"SEE"}]}},{"852":{"ind1":" ","ind2":" ","subfields":[{"5":"Q"},{"b":"Q"},{"j":"98947"}]}},{"852":{"ind1":" ","ind2":" ","subfields":[{"5":"L"},{"b":"L"},{"c":"0100"},{"h":"98\/"},{"j":"3043 H"}]}},{"852":{"ind1":" ","ind2":" ","subfields":[{"5":"S"},{"b":"S"},{"h":"Sv97"},{"j":"7235"}]}},{"900":{"ind1":"1","ind2":"s","subfields":[{"a":"Yanson, Tobe,"},{"d":"1914-2001"},{"u":"Jansson, Tove,"},{"d":"1914-2001"}]}},{"900":{"ind1":"1","ind2":"s","subfields":[{"a":"Janssonov\u00e1, Tove,"},{"d":"1914-2001"},{"u":"Jansson, Tove,"},{"d":"1914-2001"}]}},{"900":{"ind1":"1","ind2":"s","subfields":[{"a":"Jansone, Tuve,"},{"d":"1914-2001"},{"u":"Jansson, Tove,"},{"d":"1914-2001"}]}},{"900":{"ind1":"1","ind2":"s","subfields":[{"a":"Janson, Tuve,"},{"d":"1914-2001"},{"u":"Jansson, Tove,"},{"d":"1914-2001"}]}},{"900":{"ind1":"1","ind2":"s","subfields":[{"a":"Jansson, Tuve,"},{"d":"1914-2001"},{"u":"Jansson, Tove,"},{"d":"1914-2001"}]}},{"900":{"ind1":"1","ind2":"s","subfields":[{"a":"Janssonova, Tove,"},{"d":"1914-2001"},{"u":"Jansson, Tove,"},{"d":"1914-2001"}]}},{"976":{"ind1":" ","ind2":"2","subfields":[{"a":"Hcd,u"},{"b":"Sk\u00f6nlitteratur"}]}},{"005":"20050204111518.0"},{"999":{"ind1":" ","ind2":" ","subfields":[{"0":"nothing"},{"1":"everything"}]}},{"999":{"ind1":" ","ind2":" ","subfields":[{"a":"bee"},{"0":"cee"},{"d":"eee"}]}}]}';

$marc = new File_MARCJSON($json);

while ($record = $marc->next()) {
  print $record->toRaw();
}
print "\n";
?>
--EXPECT--
01919     2200541   45000010011000000030007000110080039000180200026000570350015000830400007000980420012001050840018001170840018001350840021001530840022001741000030001962450063002262500013002892600058003023000033003604400037003935000023004305990010004537400024004637750034004878410048005218410049005698410047006188410048006658410047007138410047007608520038008078520021008458520013008668520016008798520028008958520021009239000056009449000061010009000057010619000056011189000057011749000060012319760027012910050017013189990024013359990018013590000000044EMILDA980120s1998    fi     j      000 0 swe  a9515008808cFIM 72:00  99515008808  aNB  9NB9SEE  aHcd,u2kssb/6  5NBauHc2kssb  5SEEaHcf2kssb/6  5QaHcd,uf2kssb/61 aJansson, Tove,d1914-200104aDet osynliga barnet och andra berättelser /cTove Jansson  a7. uppl.  aHelsingfors :bSchildt,c1998 ;e(Falun :fScandbook)  a166, [4] s. :bill. ;c21 cm 0aMumin-biblioteket,x99-0698931-9  aOriginaluppl. 1962  aLi: S4 aDet osynliga barnet1 z951-50-0385-7w9515003857907  5Liaxab0201080u    0   4000uu   |000000e1  5SEEaxab0201080u    0   4000uu   |000000e1  5Laxab0201080u    0   4000uu   |000000e1  5NBaxab0201080u    0   4000uu   |000000e1  5Qaxab0201080u    0   4000uu   |000000e1  5Saxab0201080u    0   4000uu   |000000e1  5NBbNBcNB98:12hpliktjR, 980520  5LibLicCNBhh,u  5SEEbSEE  5QbQj98947  5LbLc0100h98/j3043 H  5SbShSv97j72351saYanson, Tobe,d1914-2001uJansson, Tove,d1914-20011saJanssonová, Tove,d1914-2001uJansson, Tove,d1914-20011saJansone, Tuve,d1914-2001uJansson, Tove,d1914-20011saJanson, Tuve,d1914-2001uJansson, Tove,d1914-20011saJansson, Tuve,d1914-2001uJansson, Tove,d1914-20011saJanssonova, Tove,d1914-2001uJansson, Tove,d1914-2001 2aHcd,ubSkönlitteratur20050204111518.0  0nothing1everything  abee0ceedeee