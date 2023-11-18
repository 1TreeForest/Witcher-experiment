#!/usr/bin/env bash
DIR="$( cd "$( dirname "${BASH_SOURCE[0]}" )" >/dev/null 2>&1 && pwd )"

if [[ -z ${1} ]]; then
    builds=( "normal" "direct" )
else
    builds=( "$@" )
fi

apps=( "openemr")

for b in "${builds[@]}"; do
    for app in "${apps[@]}"; do
        if docker build -t witcher/${b}${app} -f "${DIR}/${b}.Dockerfile" "${DIR}/../${app}"; then
            # tag for remote deploy
            # docker tag witcher/${b}${app} witcherfuzz/${b}${app}
            printf "\033[32mSucessfully built ${b}${app} \033[0m\n"
        else
            printf "\033[31mFailed to build ${b}${app} \033[0m\n"
            exit 191
        fi
    done
done
