all: build clean

build: index.tex conclusion.tex intro.tex physicalArchitecture.tex ../preambleGlobal.tex preambleLocal.tex ref.bib requirements.tex revision.tex softwareArchitecture.tex title.tex
	latexmk -dvi- -pdf index.tex
	cp index.pdf ../PDFs/System\ and\ Software\ Architecture.pdf

clean: 
	latexmk -c
	rm -f *.bbl *.dvi *.bak *.gz
