#!bash
# Dieses Script erstellt die deutschen Sprachpakete automod_de_x.y.z.zip und automod_de_x_sie_x.y.z.zip

if [ "$1" = "" -o "$1" = "-v" ]; then
	echo "AutoMOD-Version nicht angegeben."
	echo "Verwendung: $0 AutoMOD-Version [-v]"
	echo "-v für Detailausgaben (verbose) von git archive"
	echo "Beispiel: $0 1.0.1"
	exit;
else
	VERSION=$1
fi

if [ "$2" = "-v" ]; then
	VERBOSE="-v"
else
	VERBOSE=""
fi

# de
git archive $VERBOSE --output automod_de_$VERSION.zip intl-de root/language/de
echo "* Deutsches Sprachdateienpaket (Du) unter automod_de_$VERSION.zip erstellt"

# de_x_sie
git archive $VERBOSE --output automod_de_x_sie_$VERSION.zip intl-de root/language/de_x_sie
echo "* Deutsches Sprachdateienpaket (Sie) unter automod_de_x_sie_$VERSION.zip erstellt"
