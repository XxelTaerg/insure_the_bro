<div class="container" id="filter">
    <form method="get" action="" id="filter-form">
        <div class="row mb-2">
            @isset($insuranceCompanies)
                <div id="headingOne" class="mr-2">
                    <a class="btn btn-default" data-toggle="collapse" data-target="#filterCompany" aria-expanded="false"
                       aria-controls="filterCompany">
                        Компания
                    </a>
                </div>
            @endisset
            <div id="headingTwo" class="mr-2">
                <a class="btn btn-default" type="button" data-toggle="collapse" data-target="#filterPercent"
                   aria-expanded="false" aria-controls="filterPercent">
                    Процент
                </a>
            </div>
            <div id="headingThree" class="mr-2">
                <a class="btn btn-default" type="button" data-toggle="collapse" data-target="#filterPeriod"
                   aria-expanded="false" aria-controls="filterPeriod">
                    Срок
                </a>
            </div>
            @isset($sorts)
                <div id="headingFour" class="mr-2">
                    <a class="btn btn-default" type="button" data-toggle="collapse" data-target="#sort"
                       aria-expanded="false" aria-controls="sort">
                        Сортировка
                    </a>
                </div>
            @endisset
            <div class="mr-2">
                <button type="submit" class="btn btn-primary">Применить</button>
            </div>
            <div>
                <span id="resetBtn" class="btn btn-outline-danger">Сбросить</span>
            </div>
        </div>
        <div class="row">
            @isset($insuranceCompanies)
                <div class="collapse w-100" id="filterCompany" aria-labelledby="headingOne" data-parent="#filter">
                    <div class="form-group card card-body">
                        <label for="companies">Компании</label>
                        <select class="form-control" id="companies" name="companies[]" multiple>
                            @foreach($insuranceCompanies as $insuranceCompany)
                                <option value="{{ $insuranceCompany->id }}"
                                        @if(in_array((string)$insuranceCompany->id, request()->get('companies', []))) selected="selected" @endif>
                                    {{ $insuranceCompany->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
            @endisset
            <div class="collapse w-100" id="filterPercent" aria-labelledby="headingTwo" data-parent="#filter">
                <div class="form-group card card-body">
                    <label for="companies">Процент</label>
                    <div class="row">
                        <div class="col">
                            <input type="text" name="percent[from]"
                                   value="{{ request()->get('percent', [])['from'] ?? null }}" class="form-control"
                                   placeholder="от">
                        </div>
                        <div class="col">
                            <input type="text" name="percent[to]"
                                   value="{{ request()->get('percent', [])['to'] ?? null }}" class="form-control"
                                   placeholder="до">
                        </div>
                    </div>
                </div>
            </div>
            <div class="collapse w-100" id="filterPeriod" aria-labelledby="headingThree" data-parent="#filter">
                <div class="form-group card card-body">
                    <label for="companies">Срок</label>
                    <div class="row">
                        <div class="col">
                            <input name="period[from]" value="{{ request()->get('period', [])['from'] ?? null }}"
                                   type="text" class="form-control" placeholder="от">
                        </div>
                        <div class="col">
                            <input name="period[to]" value="{{ request()->get('period', [])['to'] ?? null }}"
                                   type="text" class="form-control" placeholder="до">
                        </div>
                    </div>
                </div>
            </div>
            @isset($sorts)
                <div class="collapse w-100" id="sort" aria-labelledby="headingFour" data-parent="#filter">
                    <div class="form-group card card-body">
                        <label for="sort-select">Сортировка</label>
                        <select class="form-control" id="sort-select" name="sort">
                            @foreach($sorts as $key => $sort)
                                <option value="{{ $key }}-asc"
                                        @if(request()->get('sort', 'name-asc') == $key.'-asc') selected="selected" @endif>
                                    {{ $sort}} (по возрастанию)
                                </option>
                                <option value="{{ $key }}-desc"
                                        @if(request()->get('sort', 'name') == $key.'-desc') selected="selected" @endif>
                                    {{ $sort}} (по убыванию)
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
            @endisset
        </div>
    </form>
</div>
