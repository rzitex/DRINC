all: build clean

build: conclusion.tex done.tex funcReq.tex index.tex interfaces.tex intro.tex nonFuncReq.tex server.tex
	latexmk -dvi- -pdf index.tex
	cp index.pdf ../PDFs/Presentation.pdf

clean: 
	latexmk -c
	rm -f *.bbl *.dvi *.bak *.gz
