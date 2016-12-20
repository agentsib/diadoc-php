BASEDIR		:= $(shell pwd)

all: prepare generate

prepare:
	find $(BASEDIR)/proto/ \
		-type f \
		-exec sed -i -e 's/package Diadoc.Api.Proto/package AgentSIB.Diadoc.Api.Proto/' {} \;

clean:
	rm -rf $(BASEDIR)/src/Api;

generate: clean
	php $(BASEDIR)/vendor/bin/protobuf \
		--generate-imported \
		--include-descriptors \
		--psr4 'AgentSIB\Diadoc\' \
		-i $(BASEDIR)/proto/ \
		-o $(BASEDIR)/src/ \
		$(BASEDIR)/proto/**/*.proto \
		$(BASEDIR)/proto/*.proto
