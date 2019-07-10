BASEDIR		:= $(shell pwd)

all: prepare generate

prepare:
	@find $(BASEDIR)/proto/ \
		-type f \
		-exec sed -i -e 's/package Diadoc.Api.Proto/package AgentSIB.Diadoc.Api.Proto/' {} \;

clean:
	@rm -rf $(BASEDIR)/src/Api;

generate: clean
	@if ! test -f /tmp/protobuf-2.6.0/src/protoc; then \
		echo "**************************************************" && \
		echo BEFORE MAKE YOU NEED DO THIS: && \
		echo "" && \
		echo "> cd /tmp" && \
		echo "> wget https://github.com/protocolbuffers/protobuf/releases/download/v2.6.0/protobuf-2.6.0.tar.gz" && \
		echo "> tar -xzf protobuf-2.6.0.tar.gz" && \
		echo "> cd protobuf-2.6.0/" && \
		echo "> ./configure" && \
		echo "> make" && \
		echo "**************************************************" && \
		echo "" && \
		echo "" && \
		exit 1 \
	; fi

	@php $(BASEDIR)/vendor/bin/protobuf \
		--protoc=/tmp/protobuf-2.6.0/src/protoc \
		--generate-imported \
		--include-descriptors \
		--psr4 'AgentSIB\Diadoc\' \
		-i $(BASEDIR)/proto/ \
		-o $(BASEDIR)/src/ \
		$(BASEDIR)/proto/**/*.proto \
		$(BASEDIR)/proto/*.proto
